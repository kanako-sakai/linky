<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','email_auth_number','valid_datetime','card_number','stripe_token', 'agree',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','email_auth_number','card_number', 'stripe_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
    
    public function industries()
    {
        return $this->belongsTo(Industry::class);
    }
    
    public function job_categories()
    {
        return $this->belongsTo(JobCategory::class);
    }
}
