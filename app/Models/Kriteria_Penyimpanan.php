<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria_Penyimpanan extends Model
{
    protected $table = 'kriteria_penyimpanan';
    protected $primaryKey = 'id_kriteria_penyimpanan';

    // protected $guarded = ['id_kriteria_penyimpanan'];
    // protected $fillable = ['id_kriteria_penyimpanan','pilihan_kriteria','bobot_kriteria'];
}
