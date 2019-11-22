<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeaveType extends Model
{
    protected $fillable = [
        'name', 'description', 'status'
    ];

    public function scopeActive($query)
    {
        return $query->where('status', '=', '1');
    }

    /**
     * The Leave Group that belong to the Leave Type.
     */
    public function leave_groups()
    {
        return $this->belongsToMany('App\LeaveGroup', 'leavegroup_has_leavetypes');
    }

    // public function leave_groups()
    // {
    //     return $this->belongsToMany('App\LeaveGroup', 'leavegroup_has_leavetypes', 'leave_type_id', 'leave_group_id');
    // }

    public function getGroupNames()
    {
        return $this->leave_groups->pluck('name');
    }
    
}
