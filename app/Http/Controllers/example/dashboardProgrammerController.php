<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;
use DateTime;

class dashboardProgrammerController extends Controller
{
    public function index()
    {
        $programmers_id=session()->get('dataLoginProgrammers')['id'];
        $jumlahProjectWaitings=Projects::where('progress_status', 'Menunggu')->count();
        $jumlahProjectOnProgress=Projects::where('progress_status', 'On Progress')->where('programmers_id', $programmers_id)->count();
        $jumlahProjectFinished=Projects::where('progress_status', 'Selesai')->where('programmers_id', $programmers_id)->count();

        // 3 minggu deadline
        $projects3Weeks=Projects::where('progress_status', 'On Progress')->where('programmers_id', $programmers_id)->get()->sortBy('project_deadline');


        return view('programmers.pages.dashboard', compact('jumlahProjectWaitings', 'jumlahProjectOnProgress', 'jumlahProjectFinished', 'projects3Weeks'));
    }
}
