<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OddTable extends Model
{
    use HasFactory;

    protected $table = 'odd_tables';

    protected $fillable = [
        'tournament_name',
        'fulltime',
        'startDate',
        'score_fulltime',
        'home_team',
        'away_team',
        'odd_details',
        'choose_team_fulltime',
        'ratioFulltime',
        'topUnderfulltime',
        'choose_team_half',
        'ratiohalf',
        'topUnderhalf'
    ];
}
