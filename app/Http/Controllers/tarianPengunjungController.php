<?php

namespace App\Http\Controllers;

use App\Models\tarian;
use Illuminate\Http\Request;
use App\Exports\TarianExport;
use Maatwebsite\Excel\Facades\Excel;

class tarianPengunjungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pencarian = $request->s;
        if ($pencarian) {
            $hasil = tarian::where('nama_tari', 'like', "%" . $pencarian . "%")
                ->orWhere('jenis_tarian', 'like', "%" . $pencarian . "%")
                ->orWhere('tahun_cipta', 'like', "%" . $pencarian . "%")->get();
            return view('user.pages.search_result', compact('pencarian', 'hasil'));
        }
        $kategoriPilihan = $request->k;
        $tarians = tarian::all();
        return view('user.pages.tarian', compact('kategoriPilihan', 'tarians'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tarian = tarian::find($id);
        return view('user.pages.tarian_detail', compact('tarian'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showFoto($id)
    {
        $tarian = tarian::where('id', $id)->with('photo')->first();
        return view('user.pages.tarian_foto', compact('tarian'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showVideo($id)
    {
        $tarian = tarian::where('id', $id)->with('video')->first();
        return view('user.pages.tarian_video', compact('tarian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function export_r()
    {
        $data = tarian::all();
        return view('user.pages.review_download_tarian', compact('data'));
    }

    public function export()
    {
        return Excel::download(new TarianExport, 'data_tarian.xlsx');
    }
}
