<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //


    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function group()
    {
        return $this->belongsTo('App\Group');
    }

    public function dailyfollowup()
    {
        return $this->belongsTo('App\DailyFollowUp');
    }

}
