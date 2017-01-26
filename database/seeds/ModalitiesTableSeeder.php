<?php

use Illuminate\Database\Seeder;

class ModalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

    	DB::table('modalities')->insert([
            'name' => 'Moradia',
        ]);

        DB::table('modalities')->insert([
            'name' => 'Transporte',
        ]);

        DB::table('modalities')->insert([
            'name' => 'Alimentação',
        ]);

        DB::table('modalities')->insert([
            'name' => 'Residência estudantil',
        ]);

        DB::table('modalities')->insert([
            'name' => 'Creche',
        ]);

        DB::table('modalities')->insert([
            'name' => 'Material didático',
        ]);

        DB::table('modalities')->insert([
            'name' => 'Atleta',
        ]);

        DB::table('modalities')->insert([
            'name' => 'Atividade artística/cultural',
        ]);
    }
}
