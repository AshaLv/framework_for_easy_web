<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{

	public $timestamps = false;
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
