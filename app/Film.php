<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    //
    public function actors()
    {
        return $this->belongsToMany('App\Actor');
    }
}
