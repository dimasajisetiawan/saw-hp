<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table = 'nilai';
    protected $primaryKey = 'id_nilai';

    protected $guarded = ['id_nilai'];

    protected $appends = ['sum_kriteria_penyimpanan','sum_kriteria_harga','sum_kriteria_ram','sum_kriteria_slot_sim','sum_kriteria_processor'];


    protected $with = ['kriteria_harga','kriteria_penyimpanan','kriteria_processor','kriteria_ram','kriteria_slot_sim','smartphone'];

    public function kriteria_harga()
    {
        return $this->belongsTo(kriteria_harga::class,'id_kriteria_harga');
    }

    public function kriteria_penyimpanan()
    {
        return $this->belongsTo(kriteria_penyimpanan::class,'id_kriteria_penyimpanan');
    }

    public function kriteria_processor()
    {
        return $this->belongsTo(kriteria_processor::class,'id_kriteria_processor');
    }

    public function kriteria_ram()
    {
        return $this->belongsTo(kriteria_ram::class,'id_kriteria_ram');
    }

    public function kriteria_slot_sim()
    {
        return $this->belongsTo(kriteria_slot_sim::class,'id_kriteria_slot_sim');
    }

    public function smartphone()
    {
        return $this->belongsTo(smartphone::class,'id_smartphone');
    }

    public function getSumKriteriaPenyimpananAttribute()
    {
        return $this->kriteria_penyimpanan()->sum('bobot_kriteria');
    }

    public function getSumKriteriaHargaAttribute()
    {
        return $this->kriteria_harga()->sum('bobot_kriteria');
    }
    public function getSumKriteriaRamAttribute()
    {
        return $this->kriteria_ram()->sum('bobot_kriteria');
    }
    public function getSumKriteriaSlotSimAttribute()
    {
        return $this->kriteria_slot_sim()->sum('bobot_kriteria');
    }
    public function getSumKriteriaProcessorAttribute()
    {
        return $this->kriteria_processor()->sum('bobot_kriteria');
    }
}
