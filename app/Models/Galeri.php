<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;

    // Nama tabel di database (opsional jika nama tabelnya jamak 'galeris')
    protected $table = 'galeris';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // BAGIAN PENTING: Mencegah error Mass Assignment
    protected $fillable = [
        'judul',
        'gambar',
        'deskripsi',
        'tanggal',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    // OPSIONAL: Mengubah kolom 'tanggal' jadi objek Carbon otomatis
    // Supaya di Blade bisa pakai format tanggal: $item->tanggal->format('d M Y')
    protected $casts = [
        'tanggal' => 'date',
    ];
}
