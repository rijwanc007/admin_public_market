<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RealStateProperty extends Model
{
    protected $fillable = [
        'user_id',
        'date',
        'title',
        'beds',
        'baths',
        'land_size',
        'land_size_unit',
        'address',
        'house_size',
        'house_size_unit',
        'price',
        'others',
        'description',
        'price_on_call',
        'image',
        'location',
        'approve',
    ];

    protected $table='real_state_properties';
}
