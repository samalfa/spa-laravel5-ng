<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Sam Alfa',
            'email' => 'sam.tunk@gmail.com',
            'password' => \Hash::make('sam150126'),
        ]);
    }
}