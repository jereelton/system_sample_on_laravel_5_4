<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'user_level' => '0',
            'name' => 'Administrator',
            'email' => 'admin@email.com',
            'password' => bcrypt('123456')
        ]);

        User::create([
            'user_level' => '0',
            'name' => 'Suporte',
            'email' => 'suporte@email.com',
            'password' => bcrypt('123456')
        ]);

        User::create([
            'user_level' => '1',
        	'name' => 'Jose Antonio',
        	'email' => 'jose@email.com',
        	'password' => bcrypt('123456')
        ]);

        User::create([
            'user_level' => '1',
            'name' => 'Lucas Natan',
            'email' => 'lucas@email.com',
            'password' => bcrypt('123456')
        ]);

        User::create([
            'user_level' => '1',
            'name' => 'Manoela Santos',
            'email' => 'manoela@email.com',
            'password' => bcrypt('123456')
        ]);

    }
}
