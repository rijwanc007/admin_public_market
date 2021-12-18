<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home_living extends Model
{
    protected $fillable = [
        'user_id',
        'date',
        'title',
        'product_name',
        'item_size',
        'condition',
        'price',
        'others',
        'description',
        'price_on_call',
        'image',
        'location',
        'approve',
    ];

    protected $table='home_livings';
}
