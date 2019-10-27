<?php

namespace App\Domain;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    /**
     * @var bool
     */
    public $timestamps = true;

    /**
     * @var
     */
    public $table = 'match_participants';

    public function teamplayer(){
        return $this->belongsTo('App\Domain\TeamPlayer',
            'team_player_id',
            'id');
    }

}
