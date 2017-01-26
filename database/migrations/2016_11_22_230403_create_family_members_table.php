<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamilyMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_membro')->nullable();
            $table->integer('idade_membro')->nullable();
            $table->string('parentesco_membro')->nullable();
            $table->string('profissao_membro')->nullable();
            $table->string('estado_civil_membro')->nullable();
            $table->string('escolaridade_membro')->nullable();
            $table->double('renda_mensal_membro')->nullable();

            $table->integer('questionnaire_id')->unsigned()->nullable();
            $table->foreign('questionnaire_id')->references('id')->on('questionnaires');
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
        Schema::dropIfExists('family_members');
    }
}
