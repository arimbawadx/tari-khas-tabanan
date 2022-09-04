<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Programmers;
use App\Models\Customers;
use App\Models\CustomerServices;
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
     $CustomerServices=CustomerServices::where('username', $request->username)->where('deleted', 0)->first();
     $Customers=Customers::where('username', $request->username)->where('deleted', 0)->first();
     $Programmers=Programmers::where('username', $request->username)->where('deleted', 0)->first();

     if ($CustomerServices==true) {
      if ($CustomerServices && Hash::check($request->password, $CustomerServices->password)) {
         Alert::success('Selamat Datang '.$CustomerServices['name']);
         session()->put('dataLoginCustomerServices', $CustomerServices);
         return redirect('/customer-services');
      }else{
         Alert::error('username atau password salah');
         return redirect('/');
      }
   }elseif($Customers==true){
      if($Customers && Hash::check($request->password, $Customers->password)){
         Alert::success('Selamat Datang '.$Customers['name']);
         session()->put('dataLoginCustomers', $Customers);
         return redirect('/customers');
      }else{
         Alert::error('username atau password salah');
         return redirect('/');
      }
   }elseif ($Programmers==true) {
      if($Programmers && Hash::check($request->password, $Programmers->password)){
         Alert::success('Selamat Datang '.$Programmers['name']);
         session()->put('dataLoginProgrammers', $Programmers);
         return redirect('/programmers');
      }else{
         Alert::error('username atau password salah');
         return redirect('/');
      }
   }else{
      Alert::error('username atau password salah');
      return redirect('/');
   }
}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
      session()->forget('dataLoginCustomerServices');
      session()->forget('dataLoginCustomers');
      session()->forget('dataLoginProgrammers');
      return redirect('/');
   }
}
