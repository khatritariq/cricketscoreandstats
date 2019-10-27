<?php

namespace App\Domain;


class Inning extends AModel
{
    /**
     * @var bool
     */
    public $timestamps = true;

    /**
     * @var
     */
    public $table = 'innings';

    /**
     * Batting Stats
     */
    public function playerbattingstat()
    {
        return $this->hasMany(
            'App\Domain\PlayerBattingStat'
        );
    }


    /**
     * Bowling Stats
     */
    public function playerbowlingstat()
    {
        return $this->hasMany(
            'App\Domain\PlayerBowlingStat'
        );
    }

    public function match()
    {
        return $this->belongsTo(
            'App\Domain\Match'
        );
    }

}
