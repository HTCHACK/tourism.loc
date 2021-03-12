<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Tour extends Model
{
    protected $fillable = [
        'title',
        'description',
        'price',
        'picture',
        'category_id',
        'location',
        'is_it_here',
        'lang'
       
    ];

    public function category(){
        return $this->belongsTo('App\Category');
    }
}

