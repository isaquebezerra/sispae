<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FamilyMember extends Model {

public $fillable = 
[
	'nome_membro',
	'idade_membro',
	'parentesco_membro',
	'profissao_membro',
	'estado_civil_membro',
	'escolaridade_membro',
	'renda_mensal_membro',
];
}
