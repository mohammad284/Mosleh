<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reveiw extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'comment',
        'product_id'
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }
}
