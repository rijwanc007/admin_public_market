<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalAdvertisement extends Model
{
    protected $fillable = [
        'user_id',
        'date',
        'title',
        'name',
        'email',
        'phone',
        'education',
        'training',
        'current_position',
        'country',
        'city',
        'gender',
        'experience',
        'price',
        'description',
        'price_on_call',
        'image',
        'location',
        'approve',
    ];

    protected $table='personal_advertisements';
}
