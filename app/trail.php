<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trail extends Model
{
    protected $table='trails';
    protected $fillable=['title','color','start_date','end_date','No_Of_users']; 
}
