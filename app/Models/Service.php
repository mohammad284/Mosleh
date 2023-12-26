<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'icon'
    ];
    public function users()
    {
        return $this->hasmany('App\Models\User','service_id','id');
    }
}
