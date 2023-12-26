<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'age'
    ];

    public function products()
    {
        return $this->hasMany('App\Models\Product','car_id','id');
    }
}
