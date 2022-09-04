<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;

class dashboardCustomerController extends Controller
{
    public function index()
    {
        $customers_id=session()->get('dataLoginCustomers')['id'];
        $jumlahProjectWaitings=Projects::where('progress_status', 'Menunggu')->where('customers_id', $customers_id)->count();
        $jumlahProjectOnProgress=Projects::where('progress_status', 'On Progress')->where('customers_id', $customers_id)->count();
        $jumlahProjectFinished=Projects::where('progress_status', 'Selesai')->where('customers_id', $customers_id)->count();
        return view('customers.pages.dashboard', compact('jumlahProjectWaitings', 'jumlahProjectOnProgress', 'jumlahProjectFinished'));
    }
}
