<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria_Ram extends Model
{
    protected $table = 'kriteria_ram';
    protected $primaryKey = 'id_kriteria_ram';

    protected $guarded = ['id_kriteria_ram'];

    public function nilai(){
        return $this->hasMany(Nilai::class);
    }
}
