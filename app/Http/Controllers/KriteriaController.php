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
}
