<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    //

    use Notifiable;

  
    protected $fillable = [
        'username', 'email', 'password', 'accsess_token ' ,'oauth_token '
    ];

  
    protected $hidden = [
        'password',
    ];


  
}
