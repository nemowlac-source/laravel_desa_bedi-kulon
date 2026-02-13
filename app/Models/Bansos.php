<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bansos extends Model
{
    use HasFactory;

    protected $table = 'bansos'; // Mendefinisikan nama tabel secara eksplisit

    protected $fillable = [
        'nama_penerima',
        'nik',
        'alamat',
        'jenis_bantuan',
        'foto',
    ];
}
