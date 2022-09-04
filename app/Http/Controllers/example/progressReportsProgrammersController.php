<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;
use App\Models\Items;
use App\Models\ProgressReports;


class progressReportsProgrammersController extends Controller
{
    public function index()
    {
        $programmers_id=session()->get('dataLoginProgrammers')['id'];
        $progress_reports=ProgressReports::where('programmers_id', $programmers_id)->get()->groupBy('report_code');
        return view('programmers.pages.progressReports', compact('progress_reports'));
    }

    public function store($id)
    {
        $mainModuls=Items::where('projects_id',$id)->get();
        $jumlahMainModuls=Items::where('projects_id',$id)->get()->count();
        $projects=Projects::where('id',$id)->get();

        $prLaporanKeTerakhir=ProgressReports::where('projects_id', $id)->max('report_to');
        if ($prLaporanKeTerakhir==true) {
            $prLaporanKeTerakhir=$prLaporanKeTerakhir+1;
            $reports_code="PG"."$id".$prLaporanKeTerakhir;
            $report_to = $prLaporanKeTerakhir;
        }else{
            $reports_code="PG"."$id"."1";
            $report_to = 1;
        }


        for ($i=0; $i < $jumlahMainModuls; $i++) { 
            $progress_reports= new ProgressReports;
            $progress_reports->report_code=$reports_code;
            $progress_reports->projects_id=$id;

            $progress_reports->customers_id=$projects->first()->customers_id;
            $progress_reports->programmers_id=$projects->first()->programmers_id;

            $progress_reports->report_period=date('Y-m-d');
            $progress_reports->report_to=$report_to;
            $progress_reports->report_date=date('Y-m-d');
            $progress_reports->item_name=$mainModuls[$i]->item_name;
            $progress_reports->item_progress=$mainModuls[$i]->item_progress;
            if ($mainModuls[$i]->item_finished == null) {
                $progress_reports->finishing_timeline="On Progress";
            }else{
                $progress_reports->finishing_timeline=$mainModuls[$i]->item_finished;
            }
            $progress_reports->save();
        }
        return redirect('/programmers/reports/progress-report/detail/'."PG".$id.$report_to);
        
    }

    public function show($report_code)
    {
        $progress_reports=ProgressReports::where('report_code', $report_code)->get();
        $banyakItems=ProgressReports::where('report_code', $report_code)->get()->count();
        $jumlahPresentaseItems=ProgressReports::where('report_code', $report_code)->get()->sum('item_progress');
        $Rata2Presentase=$jumlahPresentaseItems/$banyakItems;
        return view('programmers.pages.progressReportDetail', compact('progress_reports', 'Rata2Presentase'));
    }
}
