<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'category_id',
        'name',
        'description',
        'size',
        'car_id',
        'price',   
        'image'     
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }
    public function category()
    {
        return $this->belongsTo('App\Models\Category','category_id','id');
    }
    public function car()
    {
        return $this->belongsTo('App\Models\Car','car_id','id');
    }
    public function reviews()
    {
        return $this->hasmany('App\Models\reveiw','product_id','id');
    }
}
