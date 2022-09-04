<?php

namespace App\Http\Controllers;

use Alert;
use Illuminate\Http\Request;
use App\Models\Items;
use App\Models\Projects;
use App\Models\HistoryUpdateItems;
use App\Mail\sendUpdateProgrammer;


class ItemProgrammersController extends Controller
{
    public function update(Request $request, $id)
    {
        $item=Items::where('id',$id)->first();
        $item->item_name=$request->nama_item;
        $item->item_description=$request->keterangan_item;
        $item->item_progress=$request->presentase_pengerjaan_item;
        if ($request->presentase_pengerjaan_item==100) {
            $item->item_finished=date('Y-m-d');
        }
        $item_validation=Items::where('id',$id)->get()->first();
        $item->save();

        // mengambil banyaknya item per project
        $banyakItem=Items::where('projects_id',$request->id_project)->count();
        
        // mengambil jumlah semua presentase item
        $jumlahPresentaseItem=Items::where('projects_id',$request->id_project)->sum('item_progress');
        
        // merumuskan
        $rata2PresentaseItem=$jumlahPresentaseItem/$banyakItem;

        // mengubah tb projects
        $projects=Projects::where('id',$request->id_project)->first();
        $projects->project_progress=$rata2PresentaseItem;

        if ($rata2PresentaseItem==100) {
            $projects->progress_status="Selesai";
            $projects->project_finished=date('Y-m-d');
        }elseif ($projects->programmers_id=="") {
            $projects->progress_status="Menunggu";
            $projects->project_finished=null;
        }else {
            $projects->progress_status="On Progress";
            $projects->project_finished=null;
        }
        


        //add update history
        $history_update_item=new HistoryUpdateItems;
        $history_update_item->items_id=$id;
        $history_update_item->update_date=date('Y-m-d');

        

        $programmers_username=session()->get('dataLoginProgrammers')['username'];
        $programmers_name=session()->get('dataLoginProgrammers')['name'];

        $jumlahPresenDikurangkan=$item_validation->item_progress-$request->presentase_pengerjaan_item;
        $jumlahPresenDitambahkan=$request->presentase_pengerjaan_item-$item_validation->item_progress;

        if ($item_validation->item_progress > $request->presentase_pengerjaan_item) {
            $history_update_item->update_info=$programmers_username." - ".$programmers_name." - Mengurangi Presentase ".$jumlahPresenDikurangkan."%";
            $history_update_item->update_title="Mengurangi Presentase";

            $emailUpdateItem = [
                'title' => 'Mengurangi Presentase',
                'nama_programmer' => $projects->Programmers->name,
                'nama_customer' => $projects->Customers->name,
                'project_name' => $projects->project_name,
                'item_name' => $item->item_name,
                'presentase' => $jumlahPresenDikurangkan,
                'alasan' => $request->keterangan_update
            ];

            \Mail::to($projects->Customers->email)->send(new sendUpdateProgrammer($emailUpdateItem));

        }elseif ($item_validation->item_progress < $request->presentase_pengerjaan_item) {
            $history_update_item->update_info=$programmers_username." - ".$programmers_name." - Menambah Presentase ".$jumlahPresenDitambahkan."%";
            $history_update_item->update_title="Menambah Presentase";

            $emailUpdateItem = [
                'title' => 'Menambah Presentase',
                'nama_programmer' => $projects->Programmers->name,
                'nama_customer' => $projects->Customers->name,
                'project_name' => $projects->project_name,
                'item_name' => $item->item_name,
                'presentase' => $jumlahPresenDitambahkan,
                'alasan' => $request->keterangan_update
            ];

            \Mail::to($projects->Customers->email)->send(new sendUpdateProgrammer($emailUpdateItem));

        }elseif ($item_validation->item_progress == $request->presentase_pengerjaan_item) {
            $history_update_item->update_info=$programmers_username." - ".$programmers_name." - Update Lainnya";
            $history_update_item->update_title="Update Lainnya";
        }
        $history_update_item->update_description=$request->keterangan_update;

        // jika gambar update di input
        if ($request->gambar_update) {
            // menyimpan data file yang diupload ke variabel $file
            $file = $request->file('gambar_update');
            
            // nama file
            $namaFile = 'history_update_image_'.date('dmYhis').'.'.$file->getClientOriginalExtension();
            
            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'history_update_image';
            $file->move($tujuan_upload,$namaFile);

            // menyimpan ke db
            $history_update_item->update_image = $namaFile;
        }
        
        $history_update_item->save();
        $projects->save();
        Alert::toast('Anda merubah Item','success');
        return redirect('/programmers/project/detail/'.$request->id_project);
    }
}
