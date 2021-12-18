<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocalBusinessPoint extends Model
{
    protected $fillable = [
        'user_id',
        'date',
        'title',
        'characteristic',
        'advantages',
        'challenges',
        'marketing',
        'contribution',
        'sources',
        'price',
        'others',
        'description',
        'price_on_call',
        'image',
        'location',
        'approve',
    ];

    protected $table='local_business_points';
}
