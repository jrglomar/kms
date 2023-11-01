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
            'username' => 'admin',
            'password' => '$2y$10$xcV2v1WYAtXsFg8/udthtuQdXyPHWn9Ys0wRFX2HIuOQcbqVnBd.S',
            'first_name' => 'Admin',
            'last_name' => 'Account',
            'role_id' => 1,
            'created_at' => '2023-10-14 16:33:33',
            'updated_at' => '2023-10-14 16:33:33'
        ]);
    }
}
