<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = user::all();
        return view('admin.pages.DataUser', compact('users'));
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
        $request->validate([
            'nama_user' => 'required',
            // 'email' => 'required|unique:App\Models\Customers,email',
            // 'no_hp' => 'required|unique:App\Models\Customers,phone_number'
        ]);

        $generate = "ADMIN" . date('Ymdhis');

        $user = new user;
        $user->nama_user = $request->nama_user;
        $user->username = $generate;
        $user->password = Hash::make($generate);
        $user->save();

        return redirect('/admin/data-user');
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
        $request->validate([
            'nama_user' => 'required',
            // 'email' => 'required|unique:App\Models\Customers,email',
            // 'no_hp' => 'required|unique:App\Models\Customers,phone_number'
        ]);


        $user = user::find($id);
        $user->nama_user = $request->nama_user;
        $user->save();

        return redirect('/admin/data-user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        user::find($id)->delete();
        return redirect('/admin/data-user');
    }
}
