<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    protected $fillable = [
        'registration',
        'year_of_registration',
        'color',
    ];
}
