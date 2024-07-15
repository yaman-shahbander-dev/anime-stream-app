<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comments = [
            [
                'show_id' => 1,
                'user_name' => 'John Doe',
                'image' => 'web-coding.png',
                'comment' => 'Dynamically incentivize distinctive channels vis-a-vis reliable users. Compellingly pontificate extensive internal or "organic" sources whereas customer directed services. Efficiently simplify unique mindshare rather than client-based leadership skills. Enthusiastically productivate vertical e-tailers whereas superior interfaces. Objectively plagiarize.',
            ],
            [
                'show_id' => 2,
                'user_name' => 'Jane Doe',
                'image' => 'web-coding.png',
                'comment' => 'Dramatically supply functional markets rather than wireless e-tailers. Competently e-enable tactical manufactured products whereas client-centric relationships. Seamlessly provide access to alternative infrastructures before emerging ideas. Dramatically repurpose enterprise mindshare for timely supply chains. Professionally incubate standardized opportunities for interactive initiatives. Quickly brand functional processes with.',
            ]
        ];

        DB::table('comments')->insert($comments);
    }
}
