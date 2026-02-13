<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SdgsDesa extends Model
{
    use HasFactory;

    protected $fillable = [
        'goal_number',
        'title',
        'description',
        'image',
        'score',
    ];
}
