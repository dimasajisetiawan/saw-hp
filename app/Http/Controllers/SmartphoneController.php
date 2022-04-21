<?php

namespace App\Http\Controllers;

use App\Models\Smartphone;
use Illuminate\Http\Request;

class SmartphoneController extends Controller
{
    public function index()
    {
        return view('smartphone.index',[
            'handphone' => Smartphone::where('id_user',auth()->user()->id_user)->paginate(10)
        ]);
    }

    public function view_insert_smartphone()
    {
        return view('smartphone.insert_smartphone');
    }

    public function insert_smartphone(Request $request)
    {
        $validatedData = $request->validate([
            'merek_handphone' => 'required',
            'type_handphone' => 'required'
        ]);
        $validatedData['id_user'] = auth()->user()->id_user;
        Smartphone::create($validatedData);
        return redirect('data_smartphone')->with('success','Smartphone telah ditambah!');
    }
}
