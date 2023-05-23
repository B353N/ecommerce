<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'username' => 'adminuser',
                'email' => 'admin@prowebsite.vip',
                'role' => 'admin',
                'status' => 'active',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Demo Vendor',
                'username' => 'demovendor',
                'email' => 'demovendor@prowebsite.vip',
                'role' => 'vendor',
                'status' => 'active',
                'password' => bcrypt('demovendor')
            ],
            [
                'name' => 'Demo User',
                'username' => 'demouser',
                'email' => 'demouser@prowebsite.vip',
                'role' => 'user',
                'status' => 'active',
                'password' => bcrypt('demouser')
            ]
        ]);
    }
}
