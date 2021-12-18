<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tvc extends Model
{
    protected $fillable = [
        'user_id',
        'date',
        'company_name',
        'tvc_title',
        'description',
        'video',
        'location',
        'approve',
    ];

    protected $table='tvcs';
}
