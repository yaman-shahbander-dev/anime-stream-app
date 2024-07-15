<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FollowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $follows = [
            [
                'show_id' => 1,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'show_id' => 2,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        DB::table('follows')->insert($follows);
    }
}
