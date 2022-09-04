<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Alert;
use App\Models\Programmers;
use App\Models\Projects;
use App\Models\Items;
use Illuminate\Http\Request;
use App\Mail\sendEmailProgrammer;

class dataProgrammersCSController extends Controller
{
    public function index()
    {
        $Project = Projects::all();
        $Programmers=Programmers::where('deleted', 0)->get();
        return view('customer_services.pages.dataProgrammers', compact('Programmers', 'Project'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_programmer' => 'required',
            'email' => 'required|unique:App\Models\Programmers,email',
            'no_hp' => 'required|unique:App\Models\Programmers,phone_number'
        ]);

        $random="DEV".rand();
        $Programmers= new Programmers;
        $Programmers->name=$request->nama_programmer;
        $Programmers->username=$random;
        $Programmers->password=Hash::make($random);
        $Programmers->phone_number=$request->no_hp;
        $Programmers->email=$request->email;
        $Programmers->save();

        $emailDataLogin = [
            'title' => 'Halo '.$request->nama_programmer,
            'username' => $random,
            'password' => $random,
            'nama' => $request->nama_programmer
        ];
        
        \Mail::to($request->email)->send(new sendEmailProgrammer($emailDataLogin));

        Alert::toast('Programmer '.$request->nama_programmer.' ditambahkan', 'success');
        return redirect('/customer-services/data-programmers');
    }

    public function update(Request $request, $id)
    {
        $request->validate(['programmer_name' => 'required']);
        $Programmer_name=Programmers::where('id',$id)->first(); 
        $Programmer_name->name=$request->programmer_name;
        $Programmer_name->save();
        $request->validate([
            'programmer_email' => 'required|unique:App\Models\Programmers,email',
            'programmer_phone' => 'required|unique:App\Models\Programmers,phone_number'
        ]);
        $Programmers=Programmers::where('id',$id)->first(); 
        $Programmers->phone_number=$request->programmer_phone;
        $Programmers->email=$request->programmer_email;
        $Programmers->save();
        Alert::toast('Perubahan Berhasil', 'success');
        return redirect('/customer-services/data-programmers');
    }

    public function destroy($id)
    {
        $Programmers=Programmers::where('id', $id)->first();
        $Programmers->deleted = 1;
        $Programmers->save();
        return redirect('/customer-services/data-programmers');
    }

    public function Projects($id)
    {
        $Project = Projects::all();
        $Programmer = Programmers::where('id', $id)->first();
        $Programmers = Programmers::all();
        return view('customer_services.pages.projectsProgrammer', compact('Project', 'Programmer', 'Programmers'));
    }

    public function ubahTanggungJawab(Request $request, $id)
    {
        $Project = Projects::where('id', $id)->first();
        $Project->programmers_id = $request->programmers_id;
        $Project->save();
        return back()->withInput();
    }
}
