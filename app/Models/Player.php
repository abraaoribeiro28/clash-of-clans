<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'tag',
        'name',
        'trophies',
        'bestTrophies',
        'expLevel',
        'attackWins',
        'defenseWins',
        'donations',
        'clanName',
        'clanTag',
        'league',
        'leagueIcon',
    ];
}
