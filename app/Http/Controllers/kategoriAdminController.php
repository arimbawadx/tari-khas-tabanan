<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class kategoriAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = kategori::all();
        return view('admin.pages.DataKategoriTari', compact('data'));
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
        $upload = 'err';
        if (!empty($request->file('file'))) {

            // menyimpan data file yang diupload ke variabel $file
            $file = $request->file('file');

            // nama file
            $namaFile = 'img_' . date('dmYhis') . '.' . $file->getClientOriginalExtension();

            // File upload configuration 
            $tujuan_upload = public_path("lte/dist/img");


            $file->move($tujuan_upload, $namaFile);
            if (file_exists(public_path("lte/dist/img/" . $namaFile))) {
                $upload = "ok";
                // add to table
                $data = new kategori;
                $data->gambar = $namaFile;
                $data->nama_kategori = $request->nama_kategori;
                $data->deskripsi = $request->deskripsi_kategori;
                $data->save();
            }
        }
        echo $upload;
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
        $upload = 'err';
        if (!empty($request->file('file'))) {

            // menyimpan data file yang diupload ke variabel $file
            $file = $request->file('file');

            // nama file
            $namaFile = 'img_' . date('dmYhis') . '.' . $file->getClientOriginalExtension();

            // File upload configuration 
            $tujuan_upload = public_path("lte/dist/img");


            $file->move($tujuan_upload, $namaFile);
            if (file_exists(public_path("lte/dist/img/" . $namaFile))) {
                $upload = "ok";
                // add to table
                $data = kategori::find($id);
                File::delete(public_path("lte/dist/img/" . $data->gambar));
                $data->gambar = $namaFile;
                $data->nama_kategori = $request->nama_kategori;
                $data->deskripsi = $request->deskripsi_kategori;
                $data->save();
            }
        } else {
            $upload = "ok_tb_only";
            $data = kategori::find($id);
            $data->nama_kategori = $request->nama_kategori;
            $data->deskripsi = $request->deskripsi_kategori;
            $data->save();
        }
        return $upload;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kategori::find($id)->delete();
        return redirect('/admin/kategori-tari');
    }
}
