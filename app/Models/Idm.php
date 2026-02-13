<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\IdmDetail;

class Idm extends Model
{
    use HasFactory;

    protected $fillable = [
        'tahun',
        'iks',
        'ike',
        'ikl',
        'nilai_idm',
        'status',
    ];

    public function details()
    {
        return $this->hasMany(IdmDetail::class);
    }
}
