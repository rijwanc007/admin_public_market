<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResortHotelCommunity extends Model
{
    protected $fillable = [
        'user_id',
        'date',
        'title',
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

    protected $table='resort_hotel_communities';
}
