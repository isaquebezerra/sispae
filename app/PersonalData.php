<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalData extends Model {
	protected $fillable = [
		'cpf',
		'course',
		'register',
		'shift',
		'genre',
		'birthday',
		'rg',
		'issuing_body',
		'mother',
		'father',
		'course_modality',
		'class',
		'phone'
	];
}
