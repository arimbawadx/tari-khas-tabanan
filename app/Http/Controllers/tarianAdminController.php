<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\tarian;
use Illuminate\Http\Request;

class tarianAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = tarian::all();
        $kategoris = kategori::all();
        return view('admin.pages.DataTarian', compact('data', 'kategoris'));
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
        $jenis_tarian = kategori::find($request->kategori_tari)->nama_kategori;
        $data = new tarian;
        $data->kategori_id = $request->kategori_tari;
        $data->nama_tari = $request->nama_tarian;
        $data->pencipta_tari = $request->pencipta_tarian;
        $data->penata_tabuh = $request->penata_tabuh;
        $data->tahun_cipta = $request->tahun_cipta;
        $data->jenis_tarian = $jenis_tarian;
        $data->jumlah_penari = $request->jumlah_penari;
        $data->pakaian = $request->pakaian;
        $data->deskripsi = $request->deskripsi_tarian;
        $data->sejarah = $request->sejarah_tarian;
        $data->save();

        return redirect('/admin/tarian');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $jenis_tarian = kategori::find($request->kategori_tari)->nama_kategori;
        $data = tarian::find($id);
        $data->kategori_id = $request->kategori_tari;
        $data->nama_tari = $request->nama_tarian;
        $data->pencipta_tari = $request->pencipta_tarian;
        $data->penata_tabuh = $request->penata_tabuh;
        $data->tahun_cipta = $request->tahun_cipta;
        $data->jenis_tarian = $jenis_tarian;
        $data->jumlah_penari = $request->jumlah_penari;
        $data->pakaian = $request->pakaian;
        $data->deskripsi = $request->deskripsi_tarian;
        $data->sejarah = $request->sejarah_tarian;
        $data->save();

        return redirect('/admin/tarian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tarian::find($id)->delete();
        return redirect('/admin/tarian');
    }
}
