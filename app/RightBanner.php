<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RightBanner extends Model
{
    protected $fillable = [
        'user_id',
        'date',
        'company_name',
        'title',
        'description',
        'image',
        'location',
        'approve',
    ];

    protected $table='right_banners';
}
