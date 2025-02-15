<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;
    protected $table = "club_information";

    protected $fillable = [
        'full_name',
        'name_abbreviation',
        'description',
        'sponsor_name',
        'owner_name',
        'total_titles_won',
        'date_of_establishment',
        'stadium_name',
        'stadium_address',
        'president_name',
        'captain_name',
        'coach_name',
        'founder_name',
        'country',
        'city',
        'logo',
        'color_code',
        'budget',
        'is_professional',
        'website_link',
        'facebook_link',
        'instagram_link',
        'twitter_link',
    ];
}
