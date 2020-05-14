<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class request extends Model
{
    protected $fillable = ['fullname','email','mobile','thedoc','pquantity'];
}
