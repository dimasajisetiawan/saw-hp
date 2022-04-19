<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Smartphone extends Model
{
    protected $table = 'smartphone';
    protected $primaryKey = 'id_smartphone';

    protected $guarded = ['id_smartphone'];

    protected $with = ['User'];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
