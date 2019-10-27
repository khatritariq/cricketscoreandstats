<?php

namespace App\Domain;

use Illuminate\Database\Eloquent\Model;

class MatchTimeUnit extends Model
{
    /**
     * @var bool
     */
    public $timestamps = true;

    /**
     * @var
     */
    public $table = 'match_time_unit';

}
