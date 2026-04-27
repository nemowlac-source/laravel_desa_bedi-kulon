<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PendudukUsia extends Model
{
    protected $fillable = [
        'kelompok_umur',
        'laki_laki',
        'perempuan',
    ];
}
