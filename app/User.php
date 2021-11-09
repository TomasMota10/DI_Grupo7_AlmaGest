<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'firstname','secondname','email','password','company_id','type','code','email_confirmed','actived','iscontact','deleted',
    ];

    protected $hidden = [
        'password',
    ];
}
