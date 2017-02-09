<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModalityProcessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modality_process', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('process_id')->unsigned();
            $table->foreign('process_id')->references('id')->on('processes')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('modality_id')->unsigned();
            $table->foreign('modality_id')->references('id')->on('modalities')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
