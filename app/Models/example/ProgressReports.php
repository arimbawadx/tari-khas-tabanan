<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgressReports extends Model
{
    use HasFactory;
    public function Projects()
    {
        return $this->belongsTo('App\Models\Projects', 'projects_id');
    }

    public function Customers()
    {
        return $this->belongsTo('App\Models\Customers', 'customers_id');
    }

    public function Programmers()
    {
        return $this->belongsTo('App\Models\Programmers', 'programmers_id');
    }
}
