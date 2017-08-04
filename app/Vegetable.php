<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vegetable extends Model
{
	protected $hidden = ['id'];

    public function seasons()
	{
		return $this->belongsToMany('App\Season');
	}
}
