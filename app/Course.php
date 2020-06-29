<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function Organization()
    {
        return $this->belongsTo('App\Organization');
    }

    public function dates()
    {
        return $this->hasMany('App\Date');
    }
}
