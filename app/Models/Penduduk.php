<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_wilayah',
        'kk',
        'laki_laki',
        'perempuan',
        'penduduk_sementara',
        'mutasi_masuk',
        'mutasi_keluar',
        'kelahiran',
        'kematian',
    ];

    // Helper: Menghitung Total Jiwa (L + P)
    public function getTotalJiwaAttribute()
    {
        return $this->laki_laki + $this->perempuan;
    }
}
