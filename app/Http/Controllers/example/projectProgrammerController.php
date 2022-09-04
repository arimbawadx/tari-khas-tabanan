<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Customers;
use App\Models\Programmers;
use App\Models\Projects;
use App\Models\Items;
use App\Models\HistoryUpdateItems;
use Illuminate\Http\Request;

class projectProgrammerController extends Controller
{
    public function projectWaiting()
    {
        $ProjectWaiting=Projects::where('progress_status', 'Menunggu')->get();
        return view('programmers.pages.projectWaiting', compact('ProjectWaiting'));
    }

    public function projectOnProgress()
    {
        $idProgrammers = session()->get('dataLoginProgrammers')['id'];
        $projectOnProgress=Projects::where('progress_status', 'On Progress')->where('programmers_id', $idProgrammers)->get();
        return view('programmers.pages.projectOnProgress', compact('projectOnProgress'));
    }

    public function projectFinished()
    {
        $idProgrammers = session()->get('dataLoginProgrammers')['id'];
        $projectFinished=Projects::where('progress_status', 'Selesai')->where('programmers_id', $idProgrammers)->get();
        return view('programmers.pages.projectFinished', compact('projectFinished'));
    }

    public function show($id)
    {
        $projects=Projects::where('id',$id)->get();
        $infoUpdate=HistoryUpdateItems::all()->sortByDesc('id');
        $items = Items::where('projects_id',$id)->get()->sortBy('item_deadline');
        
        return view('programmers.pages.projectDetail', compact('items', 'projects', 'infoUpdate'));
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
    public function takeProject($id)
    {
        $programmers_id=session()->get('dataLoginProgrammers')['id'];
        $Projects=Projects::where('id',$id)->first(); 
        $Projects->programmers_id=$programmers_id;
        $Projects->progress_status='On Progress';
        $Projects->project_start=date('Y-m-d');
        $Projects->save();

        $Items = Items::where('projects_id', $id)->update(['item_start' => date('Y-m-d')]);

        return redirect('/programmers/project/detail/'.$id);
    }
    public function addLinkProject(Request $request, $id)
    {
        $Projects = Projects::where('id', $id)->first();
        $Projects->project_URL = $request->link_project;
        $Projects->save();
        Alert::toast('URL Project telah diperbaharui','success');    
        return redirect('/programmers/project/detail/'.$id);    
    }
    public function deleteLinkProject($id)
    {
        $Projects = Projects::where('id', $id)->first();
        $Projects->project_URL = null;
        $Projects->save();    
        return redirect('/programmers/project/detail/'.$id);    
    }
}
