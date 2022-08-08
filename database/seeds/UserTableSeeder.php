<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Admin Desa',
            'username' => 'admindesa',
            'password' => bcrypt('password'),
            'email' => 'admindesawonoayu@gmail.com',
        ]);
    }
}
