<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Questionnaire;
use App\FamilyMember;
use DateTime;
use App\Process;
use App\Property;

class QuestionnaireController extends Controller {

	public function enroll($id) {
		$process = Process::find($id);
		return view('student.enroll',['process' => $process]);
	}

	public function questionnaire($id) {
		$process = Process::find($id);
		return view('student.questionnaire',['process' => $process]);
	}

	public function questionnairesend(Request $request) {

		$input = $request->all();

		$resp_renda = isset($input['resp_renda']) ? $input['resp_renda'] : null;
		$fez_curso_lingua = isset($input['fez_curso_lingua']) ? $input['fez_curso_lingua'] : null;
		$recebe_auxilio = isset($input['recebe_auxilio']) ? $input['recebe_auxilio'] : null;
		$acesso_programas = isset($input['acesso_programas']) ? $input['acesso_programas'] : null;
		$dific_estudos = isset($input['dific_estudos']) ? $input['dific_estudos'] : null;
		$espec_soc = isset($input['espec_soc']) ? $input['espec_soc'] : null;
		$saude = isset($input['saude']) ? $input['saude'] : null;
		$nec_educ = isset($input['nec_educ']) ? $input['nec_educ'] : null;
		$deficiencia = isset($input['deficiencia']) ? $input['deficiencia'] : null;
		$limitacao = isset($input['limitacao']) ? $input['limitacao'] : null;
		$beneficiario = isset($input['beneficiario']) ? $input['beneficiario'] : null;
		$outros_rend = isset($input['outros_rend']) ? $input['outros_rend'] : null;

		$vresp_renda = null;
		$vfez_curso_lingua = null;
		$vrecebe_auxilio = null;
		$vacesso_programas = null;
		$vdific_estudos = null;
		$vespec_soc = null;
		$vsaude = null;
		$vnec_educ = null;
		$vdeficiencia = null;
		$vlimitacao = null;
		$vbeneficiario = null;
		$voutros_rend = null;

		if (isset($resp_renda)) {
			foreach ($resp_renda as $key => $value) {
				$vresp_renda .= $value.", ";
			}
		}

		if (isset($fez_curso_lingua)) {
			foreach ($fez_curso_lingua as $key => $value) {
				$vfez_curso_lingua .= $value.", ";
			}
		}

		if (isset($recebe_auxilio)) {
			foreach ($recebe_auxilio as $key => $value) {
				$vrecebe_auxilio .= $value.", ";
			}
		}

		if (isset($acesso_programas)) {
			foreach ($acesso_programas as $key => $value) {
				$vacesso_programas .= $value.", ";
			}
		}

		if (isset($dific_estudos)) {
			foreach ($dific_estudos as $key => $value) {
				$vdific_estudos .= $value.", ";
			}
		}

		if (isset($espec_soc)) {
			foreach ($espec_soc as $key => $value) {
				$vespec_soc .= $value.", ";
			}
		}

		if (isset($saude)) {
			foreach ($saude as $key => $value) {
				$vsaude .= $value.", ";
			}
		}

		if (isset($nec_educ)) {
			foreach ($nec_educ as $key => $value) {
				$vnec_educ .= $value.", ";
			}
		}

		if (isset($deficiencia)) {
			foreach ($deficiencia as $key => $value) {
				$vdeficiencia .= $value.", ";
			}
		}

		if (isset($limitacao)) {
			foreach ($limitacao as $key => $value) {
				$vlimitacao .= $value.", ";
			}
		}

		if (isset($beneficiario)) {
			foreach ($beneficiario as $key => $value) {
				$vbeneficiario .= $value.", ";
			}
		}

		if (isset($outros_rend)) {
			foreach ($outros_rend as $key => $value) {
				$voutros_rend .= $value.", ";
			}
		}

		$input['resp_renda'] = $vresp_renda;
		$input['fez_curso_lingua'] = $vfez_curso_lingua;
		$input['recebe_auxilio'] = $vrecebe_auxilio;
		$input['acesso_programas'] = $vacesso_programas;
		$input['dific_estudos'] = $vdific_estudos;
		$input['espec_soc'] = $vespec_soc;
		$input['saude'] = $vsaude;
		$input['nec_educ'] = $vnec_educ;
		$input['deficiencia'] = $vdeficiencia;
		$input['limitacao'] = $vlimitacao;
		$input['beneficiario'] = $vbeneficiario;
		$input['outros_rend'] = $voutros_rend;

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

		if ($nomes[0] !== "") {
			for ($i=0; $i < count($nomes); $i++) {
				$nome = $nomes[$i];
				$idade = $idades[$i];
				$parentesco = $parentescos[$i];
				$profissao = $profissoes[$i];
				$estado_civil = $estado_civis[$i];
				$escolaridade = $escolaridades[$i];
				$renda = $rendas[$i];

				$membro[$i] = FamilyMember::create(
				[
					'nome_membro' => $nome,
					'idade_membro' => $idade,
					'parentesco_membro' => $parentesco,
					'profissao_membro' => $profissao,
					'estado_civil_membro' => $estado_civil,
					'escolaridade_membro' => $escolaridade,
					'renda_mensal_membro' => $renda,
				]);
				$m = $membro[$i];
				$m->questionnaire_id = $questionnaire->id;
				$m->save();
			}
		}

		$descricoes = $input['desc_bem'];
		$municipios = $input['mun_bem'];
		$valores = $input['valor_bem'];

		if ($descricoes[0] !== "") {
			for ($i=0; $i < count($descricoes); $i++) { 
				$descricao = $descricoes[$i];
				$municipio = $municipios[$i];
				$valor = $valores[$i];

				$bem[$i] = Property::create(
				[
					'desc_bem' => $descricao,
					'mun_bem' => $municipio,
					'valor_bem' => $valor,
					'questionnaire_id' => $questionnaire->id
				]);
				$b = $bem[$i];
				$b->questionnaire_id = $questionnaire->id;
				$b->save();
			}
		}


		

        return $questionnaire->id;
	}
}


