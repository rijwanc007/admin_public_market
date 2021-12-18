<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $fillable =
        [
            'name',
            'image',
        ];

    protected $table = 'divisions';
}
