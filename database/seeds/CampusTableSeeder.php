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
            'name' => 'Petrolina'
        ]);

        DB::table('campuses')->insert([
            'name' => 'Petrolina Zona Rural'
        ]);

        DB::table('campuses')->insert([
            'name' => 'Santa Maria'
        ]);

        DB::table('campuses')->insert([
            'name' => 'Salgueiro'
        ]);

        DB::table('campuses')->insert([
            'name' => 'Ouricuri'
        ]);

        DB::table('campuses')->insert([
            'name' => 'Floresta'
        ]);

        DB::table('campuses')->insert([
            'name' => 'Serra Talhada'
        ]);
    }
}
