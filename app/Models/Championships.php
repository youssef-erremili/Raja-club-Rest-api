<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Championships extends Model
{
    use HasFactory;
    protected $fillable = [
        'championship_name',
        'against_who',
        'year',
        'Season',
    ];
}
