<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    protected $table='events';
    protected $fillable=['title','color','date','start_time','end_time','No_Of_users'];
}
