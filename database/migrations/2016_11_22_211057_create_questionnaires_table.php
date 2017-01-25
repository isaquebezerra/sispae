<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionnairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionnaires', function (Blueprint $table) {

            #step 1:
            $table->increments('id');
            $table->text('apelido')->nullable();
            $table->text('endereco')->nullable();
            $table->text('cidade')->nullable();
            $table->text('estado')->nullable();
            $table->text('cep')->nullable();
            $table->text('ponto_ref')->nullable();
            $table->text('telefone')->nullable();
            $table->date('data_nascimento')->nullable();
            $table->text('sexo')->nullable();
            $table->text('nome_mae')->nullable();
            $table->text('nome_pai')->nullable();
            $table->text('cond_resid')->nullable();
            $table->text('endereco_pais')->nullable();
            $table->text('cidade_pais')->nullable();
            $table->text('estado_pais')->nullable();
            $table->text('cep_pais')->nullable();
            $table->text('ponto_ref_pais')->nullable();
            $table->text('telefone_pais')->nullable();
            $table->text('estado_civil')->nullable();
            $table->text('raca')->nullable();
            $table->text('orientacao_sex')->nullable();
            $table->text('mora_com')->nullable();
            $table->text('prat_ativ')->nullable();
            $table->text('tem_filhos')->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();

            #step 2
            $table->text('ensino_fund')->nullable();
            $table->text('ensino_medio')->nullable();
            $table->text('motivo_curso')->nullable();
            $table->text('cotista')->nullable();
            $table->text('modalidade')->nullable();
            $table->text('turno')->nullable();
            $table->date('inicio_curso')->nullable();
            $table->date('termino_curso')->nullable();
            $table->text('fez_outra_graduacao')->nullable();
            $table->text('fez_outro_tecnico')->nullable();
            $table->text('fez_curso_lingua')->nullable();
            $table->text('recebe_auxilio')->nullable();
            $table->text('acesso_programas')->nullable();
            $table->text('part_proj_ext')->nullable();
            $table->text('faz_estagio')->nullable();
            $table->text('em_que_estagia')->nullable();
            $table->text('valor_estagio')->nullable();
            $table->text('dific_estudos')->nullable();

            #step 3
            $table->text('trabalha')->nullable();
            $table->text('em_que_trabalha')->nullable();
            $table->text('valor_salario')->nullable();
            $table->text('responsavel')->nullable();
            $table->text('saude')->nullable();
            $table->text('nec_educ')->nullable();
            $table->text('deficiencia')->nullable();
            $table->text('limitacao')->nullable();
            $table->text('usa_medic')->nullable();
            $table->text('nome_medic')->nullable();
            $table->text('valor_medic')->nullable();
            $table->text('plano_saude')->nullable();
            $table->text('nome_plano_saude')->nullable();
            $table->text('plano_odontologico')->nullable();
            $table->text('nome_plano_odontologico')->nullable();
            $table->text('resid_familia')->nullable();
            $table->text('tipo_construcao')->nullable();
            $table->text('abastecimento_agua')->nullable();
            $table->text('infra_rua')->nullable();
            $table->text('coleta_lixo')->nullable();
            $table->text('acesso_saude')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questionnaires');
    }
}
