<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Alert;
use App\Models\CustomerServices;
use Illuminate\Http\Request;
use App\Mail\sendEmailCS;

class dataCSCSController extends Controller
{
    public function index()
    {
        session()->get('dataLoginCustomerServices')->where('id', 2)->get();
        $CustomerServices=CustomerServices::where('deleted', 0)->get();
        return view('customer_services.pages.dataCS', compact('CustomerServices'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_cs' => 'required',
            'email' => 'required|unique:App\Models\CustomerServices,email',
            'no_hp' => 'required|unique:App\Models\CustomerServices,phone_number'
        ]);

        $random="CS".rand();
        $CustomerServices= new CustomerServices;
        $CustomerServices->name=$request->nama_cs;
        $CustomerServices->username=$random;
        $CustomerServices->password=Hash::make($random);
        $CustomerServices->phone_number=$request->no_hp;
        $CustomerServices->email=$request->email;
        $CustomerServices->save();

        $emailDataLogin = [
            'title' => 'Halo '.$request->nama_cs,
            'username' => $random,
            'password' => $random,
            'nama' => $request->nama_cs
        ];
        
        \Mail::to($request->email)->send(new sendEmailCS($emailDataLogin));

        Alert::toast('Customer Service '.$request->nama_cs.' ditambahkan', 'success');
        return redirect('/customer-services/data-cs');
    }

    public function update(Request $request, $id)
    {
        $request->validate(['cs_name' => 'required']);
        $CustomerService_name=CustomerServices::where('id',$id)->first();
        $CustomerService_name->name=$request->cs_name;
        $CustomerService_name->save();

        $request->validate([
            'cs_email' => 'required|unique:App\Models\CustomerServices,email',
            'cs_phone' => 'required|unique:App\Models\CustomerServices,phone_number'
        ]);
        $CustomerServices=CustomerServices::where('id',$id)->first(); 
        $CustomerServices->phone_number=$request->cs_phone;
        $CustomerServices->email=$request->cs_email;
        $CustomerServices->save();
        Alert::toast('Perubahan Berhasil', 'success');
        return redirect('/customer-services/data-cs');
    }

    public function destroy($id)
    {
        $CustomerServices=CustomerServices::where('id', $id)->first();     
        $CustomerServices->deleted = 1;
        $CustomerServices->save();
        if (session()->get('dataLoginCustomerServices')['id'] == $id) {
            session()->forget('dataLoginCustomerServices');
        }
        return redirect('/customer-services/data-cs');
    }
}
