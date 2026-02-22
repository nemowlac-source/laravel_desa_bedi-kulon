<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stunting extends Model
{
    protected $fillable = [
        'tahun',
        'keluarga_sasaran',
        'berisiko',
        'baduta',
        'balita',
        'pus',
        'pus_hamil',
    ];
}
