<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class crevent extends Model
{
    protected $table='crevents';
    protected $fillable=['title','color','start_date','end_date','No_Of_users'];
}
