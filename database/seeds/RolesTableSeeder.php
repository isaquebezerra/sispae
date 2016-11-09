<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'admin',
            'display_name' => 'Administrador',
            'description' => 'User is allowed to manage and edit other users',
        ]);

        DB::table('roles')->insert([
            'name' => 'assistant',
            'display_name' => 'Assistant',
            'description' => 'user is allowed to manage and edit processes',
        ]);

        DB::table('roles')->insert([
            'name' => 'student',
            'display_name' => 'Student',
            'description' => 'user is allowed to register in processes',
        ]);


    }
}
