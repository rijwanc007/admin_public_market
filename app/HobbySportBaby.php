<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HobbySportBaby extends Model
{
    protected $fillable = [
        'user_id',
        'date',
        'title',
        'product_name',
        'brand',
        'condition',
        'color',
        'item_type',
        'price',
        'others',
        'description',
        'price_on_call',
        'image',
        'location',
        'approve',
    ];

    protected $table='hobby_sport_babies';
}
