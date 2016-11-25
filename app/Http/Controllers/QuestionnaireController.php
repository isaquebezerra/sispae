<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionnaireController extends Controller {

	public function index() {
		return view('student.enroll');
	}

	public function questionnaire() {
		return view('student.questionnaire');
	}
}
