<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Enums;
class Course extends Model
{
    use Enums;
    protected $enumTypes = [
        'E-learning',
        'Webinar',
        'Fysiek',
        'Congres'
    ];

    public function Organization()
    {
        return $this->belongsTo('App\Organization');
    }

    public function dates()
    {
        return $this->hasMany('App\Date');
    }
}
