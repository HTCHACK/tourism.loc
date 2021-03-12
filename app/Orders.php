<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = [
        'name',
        'phone_number',
        'tour_id',
    ];

    
}
