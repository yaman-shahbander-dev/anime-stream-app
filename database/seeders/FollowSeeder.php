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
                'show_image' => 'hero-1.jpg',
                'show_name' => 'Fate / Stay Night: Unlimited Blade Works',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'show_id' => 2,
                'user_id' => 1,
                'show_image' => 'trend-1.jpg',
                'show_name' => 'The Seven Deadly Sins: Wrath of the Gods',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        DB::table('follows')->insert($follows);
    }
}
