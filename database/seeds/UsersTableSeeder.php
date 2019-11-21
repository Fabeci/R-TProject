<?php

use Illuminate\Database\Seeder;
use Laraspace\User;

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
            'email' => 'admin1@rtproject.com',
            'name' => 'Fabrice',
            'role' => 'admin',
            'password' => bcrypt('admin1@1234')
        ]);

        User::create([
            'email' => 'admin2@rtproject.com',
            'name' => 'Quentin',
            'role' => 'admin',
            'password' => bcrypt('admin2@1234')
        ]);

        User::create([
            'email' => 'user@rtproject.com',
            'name' => 'Amedee',
            'role' => 'user',
            'password' => bcrypt('user1@1234')
        ]);
    }
}
