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

}
