<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    public function cat()
    {
        return $this->belongsToMany('App\Cat', 'cats_colors');
    }
}
