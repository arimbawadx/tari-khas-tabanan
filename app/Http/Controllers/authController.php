<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\user;
use Alert;

class authController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function loginCheck(Request $request)
   {
      $Admin = user::where('username', $request->username)->first();

      if ($Admin == true) {
         if ($Admin && Hash::check($request->password, $Admin->password)) {
            Alert::success('Selamat Datang ' . $Admin['nama_user']);
            session()->put('dataLoginAdmin', $Admin);
            return redirect('/admin/dashboard');
         } else {
            Alert::error('username atau password salah');
            return redirect('/login');
         }
      } else {
         Alert::error('username atau password salah');
         return redirect('/login');
      }
   }

   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function logout()
   {
      session()->forget('dataLoginAdmin');
      return redirect('/login');
   }
}
