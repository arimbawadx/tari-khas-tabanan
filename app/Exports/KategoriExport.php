<?php

namespace App\Exports;

use App\Models\kategori;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class KategoriExport implements FromView
{
    public function view(): View
    {
        return view('user.pages.export_kategori', [
            'kategori' => kategori::all()
        ]);
    }
}
