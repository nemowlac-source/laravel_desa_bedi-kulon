<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_wisata',
        'deskripsi',
        'alamat',
        'harga_tiket',
        'jam_buka',
        'gambar',
    ];
}
