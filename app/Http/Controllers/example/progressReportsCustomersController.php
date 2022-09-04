<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;
use App\Models\Items;
use App\Models\ProgressReports;

class progressReportsCustomersController extends Controller
{
    public function index()
    {
        $customers_id=session()->get('dataLoginCustomers')['id'];
        $progress_reports=ProgressReports::where('customers_id', $customers_id)->get()->groupBy('report_code');
        return view('customers.pages.progressReports', compact('progress_reports'));
    }

    public function show($report_code)
    {
        $progress_reports=ProgressReports::where('report_code', $report_code)->get();
        $banyakItems=ProgressReports::where('report_code', $report_code)->get()->count();
        $jumlahPresentaseItems=ProgressReports::where('report_code', $report_code)->get()->sum('item_progress');
        $Rata2Presentase=$jumlahPresentaseItems/$banyakItems;
        return view('customers.pages.progressReportDetail', compact('progress_reports', 'Rata2Presentase'));
    }
}
