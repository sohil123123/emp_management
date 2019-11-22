<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobTitle extends Model
{
    
    protected $fillable = [
        'name','department_id','status'
    ];

    public function department(){
        return $this->belongsTo('App\Department');
    }
}
