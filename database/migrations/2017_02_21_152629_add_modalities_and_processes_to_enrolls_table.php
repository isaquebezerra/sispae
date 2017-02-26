<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddModalitiesAndProcessesToEnrollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('enrolls', function (Blueprint $table) {
            $table->integer('process_id')->unsigned()->nullable();
            $table->foreign('process_id')->references('id')->on('processes')
                ->onUpdate('cascade')->onDelete('cascade');;
            $table->integer('modality_id')->unsigned()->nullable();
            $table->foreign('modality_id')->references('id')->on('modalities')
                ->onUpdate('cascade')->onDelete('cascade');;            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('enrolls', function ($table) {
            $table->dropColumn('process_id');
            $table->dropColumn('modality_id');
        });
    }
}
