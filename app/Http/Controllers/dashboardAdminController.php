<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\photo;
use App\Models\sanggar;
use App\Models\tarian;
use App\Models\video;
use Illuminate\Http\Request;

class dashboardAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countDataSanggar = sanggar::all()->count();
        $countDataKategoriTari = kategori::all()->count();
        $countDataTarian = tarian::all()->count();
        $countDataVideo = video::all()->count();
        $countDataFoto = photo::all()->count();
        return view('admin.pages.Dashboard', compact('countDataSanggar', 'countDataKategoriTari', 'countDataTarian', 'countDataVideo', 'countDataFoto'));
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
}
