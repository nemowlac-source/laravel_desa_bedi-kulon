<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermohonanInformasi extends Model
{
    use HasFactory;

    // Mengizinkan Laravel untuk menyimpan data ke kolom-kolom ini
    protected $fillable = [
        'nama',
        'instansi',
        'telepon',
        'email',
        'permohonan'
    ];
}
