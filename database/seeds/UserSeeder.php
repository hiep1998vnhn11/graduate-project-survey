<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@hieptran.com',
            'password' => bcrypt('Hiep1998@@'),
            'isAdmin' => true,
            'isAnswer' => true
        ]);

        User::create([
            'name' => 'hiep',
            'email' => 'hiep1998vnhn11@gmail.com',
            'password' => bcrypt('Hiep1998@@')
        ]);

    }
}
