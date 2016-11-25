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
            $table->string('nome')->nullable();
            $table->integer('idade')->nullable();
            $table->string('parentesco')->nullable();
            $table->string('profissao')->nullable();
            $table->string('estado_civil')->nullable();
            $table->string('escolaridade')->nullable();
            $table->double('renda_mensal')->nullable();

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
