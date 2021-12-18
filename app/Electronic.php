<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Electronic extends Model
{
    protected $fillable = [
        'user_id',
        'date',
        'title',
        'product_name',
        'brand',
        'model',
        'condition',
        'color',
        'price',
        'others',
        'description',
        'price_on_call',
        'image',
        'location',
        'approve',
    ];

    protected $table='electronics';
}
