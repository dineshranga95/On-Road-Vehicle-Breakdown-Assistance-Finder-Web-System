<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Mechanic extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guard = 'mechanic';
    protected $fillable = [
        'name','location', 'email','gender','avatar','phone','servicetype', 'password',
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
    public function requests()
    {
        return $this->hasMany('Requests'); 
    }
    public function latestMessageTo()
{
   return $this->hasOne('Feedback', 'send_by_mechani_id')->orderBy('created_at', 'desc')->latest();
}
   
}
