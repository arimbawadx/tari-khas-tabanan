<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Customers;
use App\Models\Programmers;
use App\Models\Projects;
use App\Models\Items;
use App\Models\HistoryUpdateItems;
use Illuminate\Http\Request;

class projectCustomersController extends Controller
{
    public function index(Request $request)
    {
        $customers_id=session()->get('dataLoginCustomers')['id'];
        $allProjects=Projects::where('customers_id', $customers_id)->get();
        return view('customers.pages.allProjects', compact('allProjects'));
    }

    public function show($id)
    {
        $projects=Projects::where('id',$id)->get();
        $infoUpdate=HistoryUpdateItems::all()->sortByDesc('id');
        $items = Items::where('projects_id',$id)->get()->sortBy('item_deadline');
        
        return view('customers.pages.projectDetail', compact('items', 'projects', 'infoUpdate'));
    }

    public function create()
    {
        $customers_id=session()->get('dataLoginCustomers')['id'];
        $Projects=Projects::where('customers_id', $customers_id)->get();
        return view('customers.pages.addProject', compact('Projects'));
    }

    public function store(Request $request)
    {
        $customers_id=session()->get('dataLoginCustomers')['id'];
        $Projects=new Projects;
        $Projects->customers_id=$customers_id;
        $Projects->project_name=$request->nama_project;
        $Projects->progress_status="Menunggu";
        $Projects->project_progress=0;
        $Projects->project_start=null;
        $Projects->project_deadline=$request->deatline_project;
        $Projects->save();

        Alert::toast('Project '.$request->nama_project.' telah dibuat','success');
        return redirect('/customers/project/add-projects');
    }
    public function update(Request $request, $id)
    {
        $Projects=Projects::where('id',$id)->first(); 
        $Projects->project_name=$request->nama_project;

        if ($Projects->project_progress==100) {
            $Projects->progress_status="Selesai";
        }elseif ($Projects->programmers_id==null) {
            $Projects->progress_status="Menunggu";
        }else {
            $Projects->progress_status="On Progress";
        }

        $Projects->project_deadline=$request->project_deadline;
        $Projects->save();

        Alert::toast('Project telah diubah','success');
        return redirect('/customers/project/detail/'.$id);
    }
    public function destroy($id)
    {
        $deleteProjects=Projects::where('id',$id);
        $deleteProjects->delete();
        $deleteItemProjects=Items::where('projects_id',$id);
        $deleteItemProjects->delete();

        return redirect('/customers/projects');
    }
}
