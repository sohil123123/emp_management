<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'employeeid', 'firstname', 'lastname', 'gender', 'civil_status', 'height', 'weight', 'email', 'password', 'mobileno', 'age', 'dob', 'nationalid', 'birth_place', 'home_address', 'country_id', 'state_id', 'city_id', 'profile_image', 'company_id', 'department_id', 'job_title_id', 'company_email', 'leave_group_id', 'employment_type', 'employment_status', 'start_date', 'date_regularized'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function job_title(){
        return $this->belongsTo('App\JobTitle');
    }
}
