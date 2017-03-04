<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modality extends Model {
	
	public function processes(){
        return $this->belongsToMany('App\Process');
    }
}