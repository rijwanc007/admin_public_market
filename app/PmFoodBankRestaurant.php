<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PmFoodBankRestaurant extends Model
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

    protected $table='pm_food_bank_restaurants';
}
