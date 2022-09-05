<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class videoAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // return "test";
        $upload = 'err';
        if (!empty($_FILES['file'])) {

            // File upload configuration 
            $targetDir = "lte/dist/video";
            // $allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg', 'gif');

            $fileName = basename($_FILES['file']['name']);
            $targetFilePath = $targetDir . $fileName;
            if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)) {
                $upload = 'ok';
            }

            // Check whether file type is valid 
            // $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            // if (in_array($fileType, $allowTypes)) {
            //     // Upload file to the server 
            //     if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)) {
            //         $upload = 'ok';
            //     }
            // }
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
