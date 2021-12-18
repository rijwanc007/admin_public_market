<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourTravel extends Model
{
    protected $fillable = [
        'user_id',
        'date',
        'title',
        'from',
        'destination',
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

    protected $table='tour_travel';
}
