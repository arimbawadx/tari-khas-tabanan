<?php

namespace App\Http\Controllers;

use App\Models\photo;
use App\Models\tarian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class fotoAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = photo::whereNotNull('tarian_id')->get();
        $tarians = tarian::all();
        return view('admin.pages.DataFoto', compact('data', 'tarians'));
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
            $namaFile = 'foto_' . date('dmYhis') . '.' . $file->getClientOriginalExtension();

            // File upload configuration 
            $tujuan_upload = public_path("lte/dist/foto");


            $file->move($tujuan_upload, $namaFile);
            if (file_exists(public_path("lte/dist/foto/" . $namaFile))) {
                $upload = "ok";
                // add to table
                $foto = new photo;
                $foto->tarian_id = $request->tarians_id;
                $foto->judul_foto = $request->judul_foto;
                $foto->file_foto = $namaFile;
                $foto->sumber = $request->sumber_foto;
                $foto->save();
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
            $namaFile = 'foto_' . date('dmYhis') . '.' . $file->getClientOriginalExtension();

            // File upload configuration 
            $tujuan_upload = public_path("lte/dist/foto");


            $file->move($tujuan_upload, $namaFile);
            if (file_exists(public_path("lte/dist/foto/" . $namaFile))) {
                $upload = "ok";
                // add to table
                $foto = photo::find($id);
                File::delete(public_path("lte/dist/foto/" . $foto->file_foto));
                $foto->tarian_id = $request->tarians_id;
                $foto->judul_foto = $request->judul_foto;
                $foto->file_foto = $namaFile;
                $foto->sumber = $request->sumber_foto;
                $foto->save();
            }
        } else {
            $upload = "ok_tb_only";
            $foto = photo::find($id);
            $foto->tarian_id = $request->tarians_id;
            $foto->judul_foto = $request->judul_foto;
            $foto->sumber = $request->sumber_foto;
            $foto->save();
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
        $foto = photo::find($id);
        File::delete(public_path("lte/dist/foto/" . $foto->file_foto));
        $foto->delete();
        return redirect('/admin/foto');
    }
}
