<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class period extends Model
{
    protected $table='periods';
    protected $fillable=['title','color','start_date','end_date','No_Of_users'];
}
