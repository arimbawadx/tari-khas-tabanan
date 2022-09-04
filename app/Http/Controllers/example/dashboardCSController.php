<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programmers;
use App\Models\Customers;
use App\Models\CustomerServices;
use App\Models\Projects;

class dashboardCSController extends Controller
{
    public function index()
    {
        $jumlahCS=CustomerServices::all()->count();
        $jumlahCustomers=Customers::all()->count();
        $jumlahProgrammers=Programmers::all()->count();
        return view('customer_services.pages.dashboard', compact('jumlahCS', 'jumlahCustomers', 'jumlahProgrammers'));
    }
}
