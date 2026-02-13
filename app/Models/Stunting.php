<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stunting extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_anak',
        'nama_orangtua',
        'jenis_kelamin',
        'umur_bulan',
        'tinggi_badan',
        'berat_badan',
        'posyandu',
        'status',
        'tanggal_ukur',
    ];
}
