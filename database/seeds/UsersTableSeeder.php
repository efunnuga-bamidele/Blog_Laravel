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
        App\User::create([
            'name' => 'Bamidele Efunnuga',
            'email' => 'bamideleefunnuga9@gmail.com',
            'password' => bcrypt('password')
        ]);
    }
}
