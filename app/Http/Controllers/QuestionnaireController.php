<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Questionnaire;
use App\FamilyMember;
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
		$id_user = Auth::id();
		$questionnaire->user_id = $id_user;
		$questionnaire->save();

		$nomes = $input['nome_membro'];
		$idades = $input['idade_membro'];
		$parentescos = $input['parentesco_membro'];
		$profissoes = $input['profissao_membro'];
		$estado_civis = $input['estado_civil_membro'];
		$escolaridades = $input['escolaridade_membro'];
		$rendas = $input['renda_mensal_membro'];

		for ($i=0; $i < count($nomes); $i++) {
			$nome = $nomes[$i];
			$idade = $idades[$i];
			$parentesco = $parentescos[$i];
			$profissao = $profissoes[$i];
			$estado_civil = $estado_civis[$i];
			$escolaridade = $escolaridades[$i];
			$renda = $rendas[$i];

			$membro[$i] = FamilyMember::create(['nome_membro' => $nome,
												'idade_membro' => $idade,
												'parentesco_membro' => $parentesco,
												'profissao_membro' => $profissao,
												'estado_civil_membro' => $estado_civil,
												'escolaridade_membro' => $escolaridade,
												'renda_mensal_membro' => $renda,
												'questionnaire_id' => $questionnaire->id]);
		}
		

        return $membro;
	}
}
