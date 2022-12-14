<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \App\Models\User::create([
            'name' => 'admin',
            'email' => 'admin@testest.com',
            'password' => Hash::make('adminadminadmin'),
            'username' => 'adminuser',
            'admin' => 1
        ]);
    }
}
