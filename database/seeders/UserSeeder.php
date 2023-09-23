<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Luis Parrado',
            'email' => 'luisprmat@gmail.com',
            'password' => bcrypt('password'),
            'remember_token' => null,
        ]);
    }
}
