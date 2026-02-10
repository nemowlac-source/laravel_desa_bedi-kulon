<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apbd extends Model
{
    use HasFactory;

    protected $fillable = [
        'tahun',
        'jenis',
        'kategori',
        'anggaran',
        'realisasi',
    ];

    // Helper untuk menghitung Persentase (%)
    public function getPersentaseAttribute()
    {
        if ($this->anggaran == 0) return 0;
        return round(($this->realisasi / $this->anggaran) * 100, 1);
    }
}
