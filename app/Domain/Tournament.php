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
     * @var array
     */
    /*protected $fillable
        = [
            'id',
            'name',
            'created_at',
            'updated_at',
            'deleted_at'
        ];*/

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
