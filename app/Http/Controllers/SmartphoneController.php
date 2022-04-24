<?php

namespace App\Http\Controllers;

use App\Models\Kriteria_Harga;
use App\Models\Kriteria_Penyimpanan;
use App\Models\Kriteria_Processor;
use App\Models\Kriteria_Ram;
use App\Models\Kriteria_Slot_Sim;
use App\Models\Nilai;
use App\Models\Smartphone;
use Illuminate\Http\Request;

class SmartphoneController extends Controller
{
    public function index()
    {
        return view('smartphone.index',[
            'handphone' => Smartphone::where('id_user',auth()->user()->id_user)->paginate(10),
            'nilai' => Nilai::paginate(10)
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

    public function view_insert_smartphone_with_value()
    {
        return view('smartphone.insert_smartphone_with_value',[
            'kriteria_penyimpanan' => Kriteria_Penyimpanan::all(),
            'kriteria_processor' => Kriteria_Processor::all(),
            'kriteria_ram' => Kriteria_Ram::all(),
            'kriteria_slot_sim' => Kriteria_Slot_Sim::all(),
            'kriteria_harga' => Kriteria_Harga::all(),
            'smartphone' => Smartphone::all()
        ]);
    }

    public function insert_smartphone_with_value(Request $request)
    {
        $validatedData = $request->validate([
            'id_kriteria_penyimpanan' => 'required',
            'id_kriteria_processor' => 'required',
            'id_kriteria_ram' => 'required',
            'id_kriteria_slot_sim' => 'required',
            'id_kriteria_harga' => 'required',
            'id_smartphone' => 'required',
        ]);
        Nilai::create($validatedData);
        return redirect('data_smartphone')->with('success','Smartphone + Penilaian telah ditambah!');
    }

    public function edit_smartphone($id){
        return view('smartphone.update_smartphone', ['sp' => Smartphone::where('id_smartphone', $id)->get()]);
    }

    public function update_edit_smartphone(Request $request, $id)
    {
        $validatedData = $request->validate([
            'merek_handphone' => 'required',
            'type_handphone' => 'required'
        ]);
        Smartphone::where('id_smartphone',$id)->update($validatedData);
        return redirect('data_smartphone')->with('success','Smartphone telah diubah!');
    }

    public function edit_smartphone_penilaian($id){
        return view('smartphone.update_smartphone_with_value', [
            'nilai' => Nilai::where('id_nilai', $id)->get(),
            'kriteria_penyimpanan' => Kriteria_Penyimpanan::all(),
            'kriteria_processor' => Kriteria_Processor::all(),
            'kriteria_ram' => Kriteria_Ram::all(),
            'kriteria_slot_sim' => Kriteria_Slot_Sim::all(),
            'kriteria_harga' => Kriteria_Harga::all(),
            'smartphone' => Smartphone::all()
        ]);
    }
    
    public function update_smartphone_with_value(Request $request, $id)
    {
        $validatedData = $request->validate([
            'id_kriteria_penyimpanan' => 'required',
            'id_kriteria_processor' => 'required',
            'id_kriteria_ram' => 'required',
            'id_kriteria_slot_sim' => 'required',
            'id_kriteria_harga' => 'required',
            'id_smartphone' => 'required',
        ]);
        Nilai::where('id_nilai',$id)->update($validatedData);
        return redirect('data_smartphone')->with('success','Smartphone + Penilaian telah diubah!');
    }
    
    public function delete_smartphone($id){
        $hp = Smartphone::find($id);
        $hp->delete();
        Smartphone::where('id_smartphone',$id)->delete();
        return redirect('data_smartphone')->with('success','Smartphone telah dihapus!');
    }

    public function delete_smartphone_penilaian($id){
        $nn = Nilai::find($id);
        $nn->delete();
        Nilai::where('id_nilai',$id)->delete();
        return redirect('data_smartphone')->with('success','Smartphone + Penilaian telah dihapus!');
    }
}
