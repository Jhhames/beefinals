<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employee extends Authenticatable
{
    use Notifiable;
    // use Searchable;
    // The authentication guard for admin
    protected $guard = 'employee';
        /**
         * The attributes that are mass assignable.
        *
        * @var array
        */
    protected $fillable = [
        'name','email', 'password','salary','position'
    ];
        /**
         * The attributes that should be hidden for arrays.
        *
        * @var array
        */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profileComplete(){

    }
}
