<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contestregister extends Model
{
     protected $fillable = ['team_name','contestant1','email1','contestant2','email2','contestant3','email3','coach'];
}
