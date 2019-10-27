<?php

namespace App\Domain;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    /**
     * @var bool
     */
    public $timestamps = true;

    /**
     * @var
     */
    public $table = 'matches';

    public function team1()
    {
        return $this->belongsTo(
            'App\Domain\Team',
            'team1',
            'id'
        );
    }

    public function team2()
    {
        return $this->belongsTo(
            'App\Domain\Team',
            'team2',
            'id'
        );
    }

}
