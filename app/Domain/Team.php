<?php

namespace App\Domain;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /**
     * @var bool
     */
    public $timestamps = true;

    /**
     * @var
     */
    public $table = 'teams';

}
