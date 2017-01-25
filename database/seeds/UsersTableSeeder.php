<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Isaque Bezerra',
            'email' => 'isaquebez@gmail.com',
            'password' => bcrypt('secret'),
            'campus_id' => 1,
            
        ]);

        DB::table('users')->insert([
            'name' => 'Yuri Henrique',
            'email' => 'yury@gmail.com',
            'password' => bcrypt('secret'),
            'campus_id' => 2,
            
        ]);

        DB::table('users')->insert([
            'name' => 'João Luiz',
            'email' => 'joaoluiz@gmail.com',
            'password' => bcrypt('secret'),
            'campus_id' => 3,
        ]);

    }
}
