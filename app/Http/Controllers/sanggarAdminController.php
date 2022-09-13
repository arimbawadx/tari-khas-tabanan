<?php

namespace App\Http\Controllers;

use App\Models\sanggar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class sanggarAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = sanggar::all();
        return view('admin.pages.DataSanggar', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $upload = 'err';
        if (!empty($request->file('file'))) {

            // menyimpan data file yang diupload ke variabel $file
            $file = $request->file('file');

            // nama file
            $namaFile = 'logo_' . date('dmYhis') . '.' . $file->getClientOriginalExtension();

            // File upload configuration 
            $tujuan_upload = public_path("lte/dist/logo");


            $file->move($tujuan_upload, $namaFile);
            if (file_exists(public_path("lte/dist/logo/" . $namaFile))) {
                $upload = "ok";
                // add to table
                $data = new sanggar;
                $data->logo = $namaFile;
                $data->nama_sanggar = $request->nama_sanggar;
                $data->pemilik = $request->pemilik_sanggar;
                $data->no_telp = $request->no_telp;
                $data->tahun_berdiri = $request->tahun_berdiri;
                $data->alamat = $request->alamat_sanggar;
                $data->titik_kordinat = $request->titik_kordinat;
                $data->deskripsi = $request->deskripsi_sanggar;
                $data->save();
            }
        }
        echo $upload;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $upload = 'err';
        if (!empty($request->file('file'))) {

            // menyimpan data file yang diupload ke variabel $file
            $file = $request->file('file');

            // nama file
            $namaFile = 'logo_' . date('dmYhis') . '.' . $file->getClientOriginalExtension();

            // File upload configuration 
            $tujuan_upload = public_path("lte/dist/logo");


            $file->move($tujuan_upload, $namaFile);
            if (file_exists(public_path("lte/dist/logo/" . $namaFile))) {
                $upload = "ok";
                // add to table
                $data = sanggar::find($id);
                File::delete(public_path("lte/dist/logo/" . $data->logo));
                $data->logo = $namaFile;
                $data->nama_sanggar = $request->nama_sanggar;
                $data->pemilik = $request->pemilik_sanggar;
                $data->no_telp = $request->no_telp;
                $data->tahun_berdiri = $request->tahun_berdiri;
                $data->alamat = $request->alamat_sanggar;
                $data->titik_kordinat = $request->titik_kordinat;
                $data->deskripsi = $request->deskripsi_sanggar;
                $data->save();
            }
        } else {
            $upload = "ok_tb_only";
            $data = sanggar::find($id);
            $data->nama_sanggar = $request->nama_sanggar;
            $data->pemilik = $request->pemilik_sanggar;
            $data->no_telp = $request->no_telp;
            $data->tahun_berdiri = $request->tahun_berdiri;
            $data->alamat = $request->alamat_sanggar;
            $data->titik_kordinat = $request->titik_kordinat;
            $data->deskripsi = $request->deskripsi_sanggar;
            $data->save();
        }
        return $upload;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        sanggar::find($id)->delete();
        return redirect('/admin/data-sanggar');
    }
}
