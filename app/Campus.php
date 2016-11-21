<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Process;

class Campus extends Model {
	public $fillable = ['name'];

	public function users() {
		return $this->hasMany('App\User');
	}

	public function processes() {
		return $this->hasMany('App\Process');
	}
}
