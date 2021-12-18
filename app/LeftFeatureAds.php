<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeftFeatureAds extends Model
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

    protected $table='left_feature_ads';
}
