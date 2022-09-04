<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Alert;
use App\Models\Customers;
use App\Models\Projects;
use App\Models\Items;
use Illuminate\Http\Request;
use App\Mail\sendEmailCustomer;

class dataCustomersCSController extends Controller
{
    public function index()
    {
    	$customers=Customers::where('deleted', 0)->get();
        return view('customer_services.pages.dataCustomers', compact('customers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_customer' => 'required',
            'email' => 'required|unique:App\Models\Customers,email',
            'no_hp' => 'required|unique:App\Models\Customers,phone_number'
        ]);

        $random="CUS".rand();
        $customers= new Customers;
        $customers->name=$request->nama_customer;
        $customers->username=$random;
        $customers->password=Hash::make($random);
        $customers->phone_number=$request->no_hp;
        $customers->email=$request->email;
        $customers->save();    

        // send email
        $emailDataLogin = [
            'title' => 'Halo '.$request->nama_customer,
            'username' => $random,
            'password' => $random,
            'nama' => $request->nama_customer
        ];
        
        \Mail::to($request->email)->send(new sendEmailCustomer($emailDataLogin));

        Alert::toast('Customer '.$request->nama_customer.' ditambahkan', 'success');
        return redirect('/customer-services/data-customers');
    }

    public function update(Request $request, $id)
    {
        $request->validate(['customer_name' => 'required']);
        $customer_name=Customers::where('id',$id)->first(); 
        $customer_name->name=$request->customer_name;
        $customer_name->save();
        $request->validate([
            'customer_email' => 'required|unique:App\Models\Customers,email',
            'customer_phone' => 'required|unique:App\Models\Customers,phone_number'
        ]);
        $customers=Customers::where('id',$id)->first(); 
        $customers->phone_number=$request->customer_phone;
        $customers->email=$request->customer_email;
        $customers->save();
        Alert::toast('Perubahan Berhasil', 'success');
        return redirect('/customer-services/data-customers');
    }

    public function destroy($id)
    {
        $customers=Customers::where('id', $id)->first();
        $customers->deleted = 1;
        $customers->save();
        return redirect('/customer-services/data-customers');
    }
}
