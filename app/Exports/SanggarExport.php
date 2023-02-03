<?php

namespace App\Exports;

use App\Models\sanggar;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class SanggarExport implements FromView
{
    public function view(): View
    {
        return view('user.pages.export_sanggar', [
            'sanggar' => sanggar::all()
        ]);
    }
}
