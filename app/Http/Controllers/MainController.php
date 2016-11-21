<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campus;
use App\Process;
use DB;

class MainController extends Controller {

	public function mainindex() {
        $campuses = Campus::get();
        return view('welcome', compact('campuses'));
    }

    public function index($linkname) {
        
    	$campuses = DB::select('select * from campuses where link_name = :link_name', ['link_name' => $linkname]);
    	$campus = null;
    	foreach ($campuses as $key => $value) {
    		if($campuses[$key]->link_name == $linkname) {
    			$campus = $campuses[$key];
    		}
    	}

        $campus = Campus::find($campus->id);

    	$processes =  $campus->processes;

        return view('student.index', compact('processes'));
    }
}
