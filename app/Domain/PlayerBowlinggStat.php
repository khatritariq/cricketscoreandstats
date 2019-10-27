<?php

namespace App\Domain;

use Illuminate\Database\Eloquent\Model;

class PlayerBowlinggStat extends Model
{
    /**
     * @var bool
     */
    public $timestamps = true;

    /**
     * @var
     */
    public $table = 'player_bowling_stats';

}
