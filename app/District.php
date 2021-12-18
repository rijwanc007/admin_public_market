<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable =
        [
            'name',
            'division_id',
            'image',
        ];

    protected $table = 'districts';

    public function division()
    {
        return $this->belongsTo(Division::class);
    }
}
