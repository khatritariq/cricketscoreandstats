<?php

namespace App\Domain;

use Illuminate\Database\Eloquent\Model;

class TeamPlayer extends Model
{
    /**
     * @var bool
     */
    public $timestamps = true;

    /**
     * @var
     */
    public $table = 'team_players';

    public function player(){
        return $this->belongsTo('App\Domain\Player');
    }
}
