<?php

namespace App\Domain;

use Illuminate\Database\Eloquent\Model;

class PlayerBattingStat extends Model
{
    /**
     * @var bool
     */
    public $timestamps = true;

    /**
     * @var
     */
    public $table = 'player_batting_stats';

}
