<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model {
	public $fillable =
	[
		'desc_bem',
		'mun_bem',
		'valor_bem',
	];
}
