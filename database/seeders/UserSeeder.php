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
        $users = [
            [
                'name' => 'Jane',
                'email' => 'jane@gmail.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'image' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'John',
                'email' => 'john@gmail.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'image' => null,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('users')->insert($users);
    }
}
