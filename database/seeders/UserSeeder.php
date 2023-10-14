<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DEFAULT ROLES
        DB::table('users')->insert([
            'email' => 'jrglomar016@gmail.com',
            'password' => 'User01',
            'first_name' => 'John Raven',
            'last_name' => 'Glomar',
            'role_id' => 1,
            'created_at' => '2023-10-14 16:33:33',
            'updated_at' => '2023-10-14 16:33:33'
        ]);
    }
}
