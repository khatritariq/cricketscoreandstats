<?php

namespace App\Domain;

use Illuminate\Database\Eloquent\Model;

class PlayerBowlingStat extends Model
{
    /**
     * @var bool
     */
    public $timestamps = true;

    /**
     * @var
     */
    public $table = 'player_bowling_stats';

    public function inning(){
        return $this->belongsTo('App\Domain\Inning');
    }

    public function participant(){
        return $this->belongsTo('App\Domain\Participant');
    }


}
