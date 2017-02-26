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
            $table->text('nome')->nullable();
            $table->text('apelido')->nullable();
            $table->text('endereco')->nullable();
            $table->text('cidade')->nullable();
            $table->text('estado')->nullable();
            $table->text('cep')->nullable();
            $table->text('ponto_ref')->nullable();
            $table->text('telefone')->nullable();
            $table->text('data_nascimento')->nullable();
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
            $table->text('trabalha')->nullable();
            $table->text('em_que_trabalha')->nullable();
            $table->text('valor_salario')->nullable();
            $table->text('responsavel')->nullable();
            $table->text('resp_renda')->nullable();

            #step 2
            $table->text('ensino_fund')->nullable();
            $table->text('ensino_medio')->nullable();
            $table->text('motivo_curso')->nullable();
            $table->text('cotista')->nullable();
            $table->text('modalidade')->nullable();
            $table->text('turno')->nullable();
            $table->text('inicio_curso')->nullable();
            $table->text('termino_curso')->nullable();
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
            $table->text('espec_soc')->nullable();

            #step 3
            $table->text('saude')->nullable();
            $table->text('nec_educ')->nullable();
            $table->text('deficiencia')->nullable();
            $table->text('limitacao')->nullable();
            $table->text('usa_medic')->nullable();
            $table->text('nome_medic')->nullable();
            $table->text('valor_medic')->nullable();
            $table->text('plano_saude')->nullable();
            $table->text('nome_plano_saude')->nullable();
            $table->text('valor_plano_saude')->nullable();
            $table->text('plano_odontologico')->nullable();
            $table->text('nome_plano_odontologico')->nullable();
            $table->text('valor_plano_odontologico')->nullable();
            $table->text('resid_familia')->nullable();
            $table->text('tipo_construcao')->nullable();
            $table->text('abastecimento_agua')->nullable();
            $table->text('infra_rua')->nullable();
            $table->text('coleta_lixo')->nullable();
            $table->text('acesso_saude')->nullable();
            $table->text('beneficiario')->nullable();
            $table->text('estado_civil_pais')->nullable();

            #step 4
            $table->text('outros_rend')->nullable();
            $table->text('quem_rec_mes')->nullable();
            $table->text('valor_mes')->nullable();
            $table->text('quem_rec_alug')->nullable();
            $table->text('valor_alug')->nullable();
            $table->text('quem_rec_pensao')->nullable();
            $table->text('valor_pensao')->nullable();
            $table->text('quem_rec_ajuda')->nullable();
            $table->text('valor_ajuda')->nullable();
            $table->text('quem_rec_vendas')->nullable();
            $table->text('valor_vendas')->nullable();
            $table->text('quem_rec_trabs')->nullable();
            $table->text('valor_trabs')->nullable();
            $table->text('quem_rec_outros')->nullable();
            $table->text('valor_outros')->nullable();
            $table->text('transporte')->nullable();
            $table->text('dist_casa_campus')->nullable();
            $table->text('gasto_mens')->nullable();
            $table->text('tempo_percurso')->nullable();
            $table->text('info_add')->nullable();

            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
            
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
