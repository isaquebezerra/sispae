<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->string('cpf');
            $table->string('course');
            $table->string('register');
            $table->string('shift');
            $table->string('genre');
            $table->date('birthday');
            $table->string('rg');
            $table->string('issuing_body');
            $table->string('mother');
            $table->string('father');
            $table->string('course_modality');
            $table->string('class');
            $table->string('phone');
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
        Schema::dropIfExists('personal_datas');
    }
}
