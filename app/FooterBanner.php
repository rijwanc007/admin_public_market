<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FooterBanner extends Model
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

    protected $table='footer_banners';
}
