<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    public function cat()
    {
        return $this->hasMany('App\Cat');
    }
}
