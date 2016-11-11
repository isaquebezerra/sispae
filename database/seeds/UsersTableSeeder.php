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
            
        ]);

        DB::table('users')->insert([
            'name' => 'Yuri Henrique',
            'email' => 'yury@gmail.com',
            'password' => bcrypt('secret'),
            
        ]);

        DB::table('users')->insert([
            'name' => 'João Luiz',
            'email' => 'joaoluiz@gmail.com',
            'password' => bcrypt('secret'),
            
        ]);

    }
}
