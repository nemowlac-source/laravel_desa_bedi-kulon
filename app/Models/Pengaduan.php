<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $fillable = [
        'nama',
        'no_hp',
        'kategori',
        'isi_pengaduan',
        'lampiran',
        'status',
        'catatan_admin'
    ];
}
