<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AutoTv extends Model
{
    protected $fillable = [
        'user_id',
        'date',
        'video',
        'approve',
    ];

    protected $table='auto_tvs';
}
