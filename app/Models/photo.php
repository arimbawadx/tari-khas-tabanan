<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    use HasFactory;
    public function tarian()
    {
        return $this->belongsTo('App\Models\tarian', 'tarian_id');
    }
}
