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

}
