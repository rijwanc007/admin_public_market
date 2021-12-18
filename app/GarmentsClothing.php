<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GarmentsClothing extends Model
{
    protected $fillable = [
        'user_id',
        'date',
        'title',
        'product_name',
        'color',
        'brand',
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

    protected $table='garments_clothing';
}
