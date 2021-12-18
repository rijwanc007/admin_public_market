<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FuelOilGas extends Model
{
    protected $fillable = [
        'user_id',
        'date',
        'title',
        'product_name',
        'brand',
        'price',
        'others',
        'description',
        'price_on_call',
        'image',
        'location',
        'approve',
    ];

    protected $table='fuel_oil_gases';
}
