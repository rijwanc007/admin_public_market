<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleTransportation extends Model
{
    protected $fillable = [
        'user_id',
        'date',
        'title',
        'product_name',
        'brand',
        'condition',
        'model',
        'edition',
        'year_of_manufacture',
        'kilometers_run',
        'engine_capacity',
        'segment',
        'wheel_size',
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

    protected $table='vehicle_transportations';
}
