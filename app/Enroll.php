<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enroll extends Model {

	public $fillable =
	[
		'status',
		'user_id',
		'process_id',
		'modality_id'
	];

	public function user() {
		return $this->belongsTo('App\User');
	}

	public function process() {
		return $this->belongsTo('App\Process');
	}

	public function modality() {
		return $this->belongsTo('App\Modality');
	}
}
