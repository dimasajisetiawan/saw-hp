<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table = 'nilai';
    protected $primaryKey = 'id_nilai';

    protected $guarded = ['id_nilai'];

    protected $with = ['kriteria_harga','kriteria_penyimpanan','kriteria_processor','kriteria_ram','kriteria_slot_sim','smartphone'];

    public function kriteria_harga()
    {
        return $this->belongsTo(kriteria_harga::class);
    }

    public function kriteria_penyimpanan()
    {
        return $this->belongsTo(kriteria_penyimpanan::class);
    }

    public function kriteria_processor()
    {
        return $this->belongsTo(kriteria_processor::class);
    }

    public function kriteria_ram()
    {
        return $this->belongsTo(kriteria_ram::class);
    }

    public function kriteria_slot_sim()
    {
        return $this->belongsTo(kriteria_slot_sim::class);
    }

    public function smartphone()
    {
        return $this->belongsTo(smartphone::class);
    }
}
