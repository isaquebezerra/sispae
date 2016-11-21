<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Campus;

class Process extends Model {

		public $fillable = ['name', 'start_date', 'final_date', 'campus_id', 'status'];

	public function campus() {
        return $this->belongsTo('App\Campus');
    }

    public function files() {
        return $this->hasMany('App\File');
    }
}
