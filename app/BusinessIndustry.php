<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessIndustry extends Model
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

    protected $table='business_industries';
}
