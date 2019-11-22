<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeaveGroup extends Model
{
    protected $fillable = [
        'name', 'description', 'status'
    ];

    public function scopeActive($query)
    {
        return $query->where('status', '=', '1');
    }
}
