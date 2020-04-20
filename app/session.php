<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class session extends Model
{
    
    protected $table='session';
    protected $fillable=['title','color','start_date','end_date','No_Of_users'];
}
