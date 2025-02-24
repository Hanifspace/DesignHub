<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'client_name', 
        'project_title', 
        'phone', 
        'submission_date', 
        'brief', 
        'status', 
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

