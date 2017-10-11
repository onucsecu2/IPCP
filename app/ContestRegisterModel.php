<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContestRegisterModel extends Model
{
    protected $fillable = ['team','con1','email1','con2','email2','con3','email3','coach'];
}
