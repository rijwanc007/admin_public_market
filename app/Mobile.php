<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobile extends Model
{
    protected $fillable = [
        'user_id',
        'date',
        'title',
        'product_name',
        'brand',
        'condition',
        'processor',
        'storage',
        'color',
        'battery',
        'charging_power',
        'display',
        'camera',
        'connectivity',
        'feature',
        'weight',
        'price',
        'others',
        'description',
        'price_on_call',
        'image',
        'location',
        'approve',
    ];

    protected $table='mobiles';

}
