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
    public $table = 'participants';

}
