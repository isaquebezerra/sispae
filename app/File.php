<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model {

	protected $table = "files";

    public $fillable = ['filename'];

    public function process() {
    	return $this->belongsTo('App\Process');
    }
}
