<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
   
    protected $fillable = ['Id','PName','PPrice','PImage','created_at','updated_at'];
}