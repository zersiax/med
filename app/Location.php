<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function date()
    {
        return $this->belongsTo('App\Date');
    }
}
