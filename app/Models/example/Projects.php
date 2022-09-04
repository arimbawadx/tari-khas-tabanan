<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;
    public function Customers()
    {
        return $this->belongsTo('App\Models\Customers', 'customers_id');
    }

    public function Programmers()
    {
        return $this->belongsTo('App\Models\Programmers', 'programmers_id');
    }

    public function ProgressReports()
    {
        return $this->hasMany('App\Models\ProgressReports');
    }
}
