<?php

namespace App\Http\Controllers;

use App\Models\tarian;
use App\Models\video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class videoAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = video::all();
        $tarians = tarian::all();
        return view('admin.pages.DataVideo', compact('data', 'tarians'));
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
            $namaFile = 'video_' . date('dmYhis') . '.' . $file->getClientOriginalExtension();

            // File upload configuration 
            $tujuan_upload = public_path("lte/dist/video");


            $file->move($tujuan_upload, $namaFile);
            if (file_exists(public_path("lte/dist/video/" . $namaFile))) {
                $upload = "ok";
                // add to table
                $video = new video;
                $video->tarian_id = $request->tarians_id;
                $video->judul_video = $request->judul_video;
                $video->file_video = $namaFile;
                $video->sumber = $request->sumber_video;
                $video->save();
            }
        } elseif (!empty($request->link_youtube)) {
            $upload = "ok";
            // add to table
            $video = new video;
            $video->tarian_id = $request->tarians_id;
            $video->judul_video = $request->judul_video;
            $video->sumber = $request->sumber_video;
            // https://www.youtube.com/watch?v=8ep3aV6-G6c
            // https://youtu.be/i3lzSaHs8qg
            $link_youtube = explode('/', $request->link_youtube);
            $link_youtube2 = explode('v=', $request->link_youtube);
            if ($link_youtube[2] == 'youtu.be') {
                $video->link_youtube = "https://www.youtube.com/embed/" . $link_youtube[3];
            } elseif ($link_youtube2[0] == 'https://www.youtube.com/watch?') {
                $video->link_youtube = "https://www.youtube.com/embed/" . $link_youtube2[1];
            }
            $video->save();
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
            $namaFile = 'video_' . date('dmYhis') . '.' . $file->getClientOriginalExtension();

            // File upload configuration 
            $tujuan_upload = public_path("lte/dist/video");


            $file->move($tujuan_upload, $namaFile);
            if (file_exists(public_path("lte/dist/video/" . $namaFile))) {
                $upload = "ok";
                // add to table
                $video = video::find($id);
                File::delete(public_path("lte/dist/video/" . $video->file_video));
                $video->tarian_id = $request->tarians_id;
                $video->judul_video = $request->judul_video;
                $video->file_video = $namaFile;
                $video->sumber = $request->sumber_video;
                $video->save();
            }
        } elseif (!empty($request->link_youtube)) {
            $upload = "ok";
            // add to table
            $video = video::find($id);
            $video->tarian_id = $request->tarians_id;
            $video->judul_video = $request->judul_video;
            $video->sumber = $request->sumber_video;
            // https://www.youtube.com/watch?v=8ep3aV6-G6c
            // https://youtu.be/i3lzSaHs8qg
            $link_youtube = explode('/', $request->link_youtube);
            $link_youtube2 = explode('v=', $request->link_youtube);
            if ($link_youtube[2] == 'youtu.be') {
                $video->link_youtube = "https://www.youtube.com/embed/" . $link_youtube[3];
            } elseif ($link_youtube2[0] == 'https://www.youtube.com/watch?') {
                $video->link_youtube = "https://www.youtube.com/embed/" . $link_youtube2[1];
            }
            $video->save();
        } else {
            $upload = "ok_tb_only";
            $video = video::find($id);
            $video->tarian_id = $request->tarians_id;
            $video->judul_video = $request->judul_video;
            $video->sumber = $request->sumber_video;
            $video->save();
        }
        echo $upload;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = video::find($id);
        File::delete(public_path("lte/dist/video/" . $video->file_video));
        $video->delete();
        return redirect('/admin/video');
    }
}
