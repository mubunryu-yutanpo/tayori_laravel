<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar'
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

    public function poof(){
        return $this->hasMany('App\Models\Poof');
    }
    public function pee(){
        return $this->hasMany('App\Models\Pee');
    }
    public function food(){
        return $this->hasMany('App\Models\Food');
    }
    public function keeppoof(){
        return $this->hasMany('App\Models\KeepPoof');
    }
    public function keeppee(){
        return $this->hasMany('App\Models\KeepPee');
    }
    public function keepfood(){
        return $this->hasMany('App\Models\KeepFood');
    }

}
