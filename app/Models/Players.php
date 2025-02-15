<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'date_of_birth',
        'number',
        'position',
        'joined',
        'contract_until',
        'market_value',
        'age',
        'height',
        'foot',
        'nationality'
    ];
}
