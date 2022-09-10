<?php

namespace App\Http\Controllers;

use App\Models\sanggar;
use Illuminate\Http\Request;

class sanggarAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = sanggar::all();
        return view('admin.pages.DataSanggar', compact('data'));
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
        $data = new sanggar;
        $data->nama_sanggar = $request->nama_sanggar;
        $data->pemilik = $request->pemilik_sanggar;
        $data->alamat = $request->alamat_sanggar;
        $data->titik_kordinat = $request->titik_kordinat;
        $data->deskripsi = $request->deskripsi_sanggar;
        $data->save();

        return redirect('/admin/data-sanggar');
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
        $data = sanggar::find($id);
        $data->nama_sanggar = $request->nama_sanggar;
        $data->pemilik = $request->pemilik_sanggar;
        $data->alamat = $request->alamat_sanggar;
        $data->titik_kordinat = $request->titik_kordinat;
        $data->deskripsi = $request->deskripsi_sanggar;
        $data->save();

        return redirect('/admin/data-sanggar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        sanggar::find($id)->delete();
        return redirect('/admin/data-sanggar');
    }
}
