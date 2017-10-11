<?php

namespace App;



use Illuminate\Foundation\Auth\User as Authenticatable;

class coaches extends Authenticatable
{
    //Mass assignable attributes
    protected $fillable = [
        'name', 'designation','email', 'password',
    ];
    
    //hidden attributes
    protected $hidden = [
        'password', 'remember_token',
    ];
    
}
