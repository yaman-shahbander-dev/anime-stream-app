<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $episodes = [
            [
                'show_id' => 1,
                'name' => '01',
                'video' => '1.mp4',
                'thumbnail' => 'anime-watch.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'show_id' => 2,
                'name' => '01',
                'video' => '2.mp4',
                'thumbnail' => 'anime-watch-2.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('episodes')->insert($episodes);
    }
}
