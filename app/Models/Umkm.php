<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_produk',
        'harga',
        'penjual',
        'no_hp',
        'deskripsi',
        'gambar',
    ];
}
