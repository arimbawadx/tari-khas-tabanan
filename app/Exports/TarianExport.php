<?php

namespace App\Exports;

use App\Models\tarian;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class TarianExport implements FromView
{
    public function view(): View
    {
        return view('user.pages.export_tarian', [
            'tarian' => tarian::all()
        ]);
    }
}
