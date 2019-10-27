<?php

namespace App\Domain;

use Illuminate\Database\Eloquent\Model;

class Round extends AModel
{
    /**
     * @var bool
     */
    public $timestamps = true;

    /**
     * @var
     */
    public $table = 'rounds';

    /**
     * @var array
     */
    protected $fillable
        = [
            'id',
            'name',
            'created_at',
            'updated_at',
            'deleted_at'
        ];

}
