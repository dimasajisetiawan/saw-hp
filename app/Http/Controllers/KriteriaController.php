<?php

namespace App\Http\Controllers;

use App\Models\Kriteria_Harga;
use App\Models\Kriteria_Penyimpanan;
use App\Models\Kriteria_Processor;
use App\Models\Kriteria_Ram;
use App\Models\Kriteria_Slot_Sim;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    public function index()
    {
        return view('kriteria.dashboard',[
            'pny' => Kriteria_Penyimpanan::paginate(4),
            'rm' => Kriteria_Ram::paginate(4),
            'proc' => Kriteria_Processor::paginate(3),
            'hrg' => Kriteria_Harga::paginate(4),
            'sim' => Kriteria_Slot_Sim::paginate(3)
        ]);
    }

    public function view_edit_kriteria_penyimpanan($test)
    {
        $krt = Kriteria_Penyimpanan::find($test);
        $temp['id_kriteria'] = $krt->id_kriteria_penyimpanan;
        $temp['pilihan_kriteria'] = $krt->pilihan_kriteria;
        $temp['bobot_kriteria'] = $krt->bobot_kriteria;

        return view('kriteria.edit_kriteria',[
            'krt' => $temp
        ]);
    }
    public function view_edit_kriteria_ram($test)
    {
        $krt = Kriteria_Ram::find($test);
        $temp['id_kriteria'] = $krt->id_kriteria_ram;
        $temp['pilihan_kriteria'] = $krt->pilihan_kriteria;
        $temp['bobot_kriteria'] = $krt->bobot_kriteria;

        return view('kriteria.edit_kriteria',[
            'krt' => $temp
        ]);
    }
    public function view_edit_kriteria_processor($test)
    {
        $krt = Kriteria_Processor::find($test);
        $temp['id_kriteria'] = $krt->id_kriteria_processor;
        $temp['pilihan_kriteria'] = $krt->pilihan_kriteria;
        $temp['bobot_kriteria'] = $krt->bobot_kriteria;

        return view('kriteria.edit_kriteria',[
            'krt' => $temp
        ]);
    }
    public function view_edit_kriteria_slot_sim($test)
    {
        $krt = Kriteria_Slot_Sim::find($test);
        $temp['id_kriteria'] = $krt->id_kriteria_slot_sim;
        $temp['pilihan_kriteria'] = $krt->pilihan_kriteria;
        $temp['bobot_kriteria'] = $krt->bobot_kriteria;

        return view('kriteria.edit_kriteria',[
            'krt' => $temp
        ]);
    }
    public function view_edit_kriteria_harga($test)
    {
        $krt = Kriteria_Harga::find($test);
        $temp['id_kriteria'] = $krt->id_kriteria_harga;
        $temp['pilihan_kriteria'] = $krt->pilihan_kriteria;
        $temp['bobot_kriteria'] = $krt->bobot_kriteria;

        return view('kriteria.edit_kriteria',[
            'krt' => $temp
        ]);
    }

    public function Update_edit_kriteria_penyimpanan(Request $request, $id)
    {
        $validatedData['bobot_kriteria'] = $request->bobot_kriteria;
        Kriteria_Penyimpanan::where('id_kriteria_penyimpanan',$id)->update($validatedData);
        return redirect('data_kriteria')->with('success','Kriteria telah diubah!');
    }
}
