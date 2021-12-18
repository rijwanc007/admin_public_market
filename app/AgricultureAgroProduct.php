<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgricultureAgroProduct extends Model
{
    protected $fillable = [
        'user_id',
        'date',
        'title',
        'product_name',
        'brand',
        'condition',
        'type',
        'price',
        'others',
        'description',
        'price_on_call',
        'image',
        'location',
        'approve',
    ];

    protected $table='agriculture_agro_products';
}
