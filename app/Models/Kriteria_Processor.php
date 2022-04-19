<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria_Processor extends Model
{
    protected $table = 'kriteria_processor';
    protected $primaryKey = 'id_kriteria_processor';

    protected $guarded = ['id_kriteria_processor'];
}
