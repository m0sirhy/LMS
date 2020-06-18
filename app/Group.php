<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //
    public function instructor()
    {
        return $this->hasOne('App\Instructor');
    }
    public function students()
    {
        return $this->hasMany('App\Student');
    }
}
