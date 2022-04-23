<?php

namespace App\Http\Controllers;

use App\Models\Kriteria_Penyimpanan;
use App\Models\Nilai;
use App\Models\Kriteria_Ram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NilaiController extends Controller
{
    public function index()
    {
        return view('nilai.index',[
            'nilai' => Nilai::all()
        ]);
    }
}
