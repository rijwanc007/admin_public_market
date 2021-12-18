<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PetAnimal extends Model
{
    protected $fillable = [
        'user_id',
        'date',
        'title',
        'product_name',
        'color',
        'type',
        'price',
        'others',
        'description',
        'price_on_call',
        'image',
        'location',
        'approve',
    ];

    protected $table='pet_animals';
}
