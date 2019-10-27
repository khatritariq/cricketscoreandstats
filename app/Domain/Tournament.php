<?php

namespace App\Domain;

class Tournament extends AModel
{
    /**
     * @var bool
     */
    public $timestamps = true;

    /**
     * @var
     */
    public $table = 'tournaments';

    /**
     * Tournament Rounds
     */
    public function rounds()
    {
        return $this->hasMany(
            'App\Domain\Round'
        );
    }
}
