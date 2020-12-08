<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('adminuser'),
            'is_admin' => 1,
        ]);
        User::create([
            'name' => 'Demo User',
            'email' => 'demo@gmail.com',
            'password' => bcrypt('demouser')
        ]);
    }
}