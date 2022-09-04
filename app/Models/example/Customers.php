<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    public function Projects()
    {
        return $this->hasMany('App\Models\Projects');
    }

    public function ProgressReports()
    {
        return $this->hasMany('App\Models\ProgressReports');
    }
}
