<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria_Harga extends Model
{
    protected $table = 'kriteria_harga';
    protected $primaryKey = 'id_kriteria_harga';

    protected $guarded = ['id_kriteria_harga'];

    public function nilai(){
        return $this->hasMany(Nilai::class);
    }
}
