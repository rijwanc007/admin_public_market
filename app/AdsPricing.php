<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdsPricing extends Model
{
    protected $fillable = [
        'user_id',
        'date',
        'title',
        'description',
        'approve',
    ];

    protected $table='ads_pricings';
}
