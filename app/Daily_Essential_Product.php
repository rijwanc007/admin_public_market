<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daily_Essential_Product extends Model
{
    protected $fillable = [
        'user_id',
        'date',
        'title',
        'product_name',
        'brand',
        'condition',
        'item_type',
        'price',
        'others',
        'description',
        'price_on_call',
        'image',
        'location',
        'approve',
    ];

    protected $table='daily_essential_products';
}
