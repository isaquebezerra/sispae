<?php

use Illuminate\Database\Seeder;

class ProcessesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

    	DB::table('processes')->insert([
    		'name' => 'Auxílio estudantil 2017',
    		'start_date' => '2017-01-01',
    		'final_date' => '2017-01-31',
    		'campus_id' => 1,
    		'status' => 'Aberto']);
    }
}
