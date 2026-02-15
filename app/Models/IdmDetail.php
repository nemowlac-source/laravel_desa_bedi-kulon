<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdmDetail extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
        'idm_id',
        'jenis',
        'indikator',
        'skor',
        'keterangan',
        'kegiatan',
        'nilai_plus',
        'pelaksana_pusat',
        'pelaksana_provinsi',
        'pelaksana_kabupaten',
        'pelaksana_desa',
        'pelaksana_csr',
        'pelaksana_lainnya'
    ];

    // Relasi balik ke IDM Utama
    public function idm()
    {
        return $this->belongsTo(Idm::class);
    }
}
