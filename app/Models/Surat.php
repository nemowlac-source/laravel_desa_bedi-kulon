<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $fillable = ['nama_pemohon', 'nik', 'jenis_surat', 'keperluan', 'status'];
}
