<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Questionnaire;
use DateTime;

class QuestionnaireController extends Controller {

	public function index() {
		return view('student.enroll');
	}

	public function questionnaire() {
		return view('student.questionnaire');
	}

	public function questionnairesend(Request $request) {

		$input = $request->all();

		$datanasc = $input['data_nascimento'];
		$inicio_curso = $input['inicio_curso'];
		$termino_curso = $input['termino_curso'];
		
		$input['data_nascimento'] = DateTime::createFromFormat('d/m/Y', $datanasc);
		$input['inicio_curso'] = DateTime::createFromFormat('d/m/Y', $inicio_curso);
		$input['termino_curso'] = DateTime::createFromFormat('d/m/Y', $termino_curso);

		$fez_curso_lingua = $input['fez_curso_lingua'];
		$recebe_auxilio = $input['recebe_auxilio'];
		$acesso_programas = $input['acesso_programas'];
		$saude = $input['saude'];
		$nec_educ = $input['nec_educ'];
		$deficiencia = $input['deficiencia'];
		$limitacao = $input['limitacao'];


		$vfez_curso_lingua = null;
		$vrecebe_auxilio = null;
		$vacesso_programas = null;
		$vsaude = null;
		$vnec_educ = null;
		$vdeficiencia = null;
		$vlimitacao = null;

		foreach ($fez_curso_lingua as $key => $value) {
			$vfez_curso_lingua .= $value.", ";
		}

		foreach ($recebe_auxilio as $key => $value) {
			$vrecebe_auxilio .= $value.", ";
		}

		foreach ($acesso_programas as $key => $value) {
			$vacesso_programas .= $value.", ";
		}

		foreach ($saude as $key => $value) {
			$vsaude .= $value.", ";
		}

		foreach ($nec_educ as $key => $value) {
			$vnec_educ .= $value.", ";
		}

		foreach ($deficiencia as $key => $value) {
			$vdeficiencia .= $value.", ";
		}

		foreach ($limitacao as $key => $value) {
			$vlimitacao .= $value.", ";
		}

		$input['fez_curso_lingua'] = $vfez_curso_lingua;
		$input['recebe_auxilio'] = $vrecebe_auxilio;
		$input['acesso_programas'] = $vacesso_programas;
		$input['saude'] = $vsaude;
		$input['nec_educ'] = $vnec_educ;
		$input['deficiencia'] = $vdeficiencia;
		$input['limitacao'] = $vlimitacao;

		$questionnaire = Questionnaire::create($input);
		$id = Auth::id();
		$questionnaire->user_id = $id;
		$questionnaire->save();

        return redirect()
        	->route('student.enroll');
	}
}

// $tipo = $_POST['negocio']; 
// $valores = ''; 
// foreach($tipo as $k => $v){ 
// $valores .= $v; 
// } 
// print $valores;
