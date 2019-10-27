<?php

namespace App\Domain;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    /**
     * @var bool
     */
    public $timestamps = true;

    /**
     * @var
     */
    public $table = 'players';

}
