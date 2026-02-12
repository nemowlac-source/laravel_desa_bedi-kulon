<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendudukAgama extends Model
{
    use HasFactory;

    protected $fillable = [
        'agama',
        'jumlah',
    ];
}
