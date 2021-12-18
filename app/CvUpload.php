<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CvUpload extends Model
{
    protected $fillable = [
        'user_id',
        'date',
        'first_name',
        'last_name',
        'email',
        'phone',
        'expected_salary',
        'file',
        'location',
        'approve',
    ];

    protected $table='cv_uploads';
}
