<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PendudukPekerjaan extends Model
{
    protected $fillable = [
        'nama_pekerjaan',
        'jumlah',
    ];
}
