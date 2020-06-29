<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    public function location()
    {
        return $this->hasOne('App\Location');
    }
    public function course()
    {
        return $this->belongsTo('App\Course');
    }
}
