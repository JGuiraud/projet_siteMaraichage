<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    public function vegetables()
    {
        return $this->belongsToMany('App\Vegetable');
    }
}
