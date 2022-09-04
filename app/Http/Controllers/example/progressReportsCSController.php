<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgressReports;

class progressReportsCSController extends Controller
{
    public function index()
    {
        $progress_reports=ProgressReports::all()->groupBy('report_code');
        return view('customer_services.pages.progressReports', compact('progress_reports'));
    }

    public function detail($id)
    {
        $progress_reports=ProgressReports::where('report_code', $id)->get();
        $banyakItems=ProgressReports::where('report_code', $id)->get()->count();
        $jumlahPresentaseItems=ProgressReports::where('report_code', $id)->get()->sum('item_progress');
        $Rata2Presentase=$jumlahPresentaseItems/$banyakItems;
        return view('customer_services.pages.progressReportDetail', compact('progress_reports', 'Rata2Presentase'));
    }
}
