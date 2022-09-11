<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tarian extends Model
{
    use HasFactory;
    public function video()
    {
        return $this->hasMany('App\Models\video');
    }
    public function photo()
    {
        return $this->hasMany('App\Models\photo');
    }
}
