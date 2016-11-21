<?php

use Illuminate\Database\Seeder;

class CampusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table('campuses')->insert([
            'name' => 'Floresta',
            'link_name' => 'floresta'
        ]);

        DB::table('campuses')->insert([
            'name' => 'Ouricuri',
            'link_name' => 'ouricuri'
        ]);

        DB::table('campuses')->insert([
            'name' => 'Petrolina',
            'link_name' => 'petrolina'
        ]);

        DB::table('campuses')->insert([
            'name' => 'Petrolina Zona Rural',
            'link_name' => 'petrolina-zona-rural'
        ]);

        DB::table('campuses')->insert([
            'name' => 'Santa Maria',
            'link_name' => 'santa-maria'
        ]);

        DB::table('campuses')->insert([
            'name' => 'Salgueiro',
            'link_name' => 'salgueiro'
        ]); 

        DB::table('campuses')->insert([
            'name' => 'Serra Talhada',
            'link_name' => 'serra-talhada'
        ]);
    }
}
