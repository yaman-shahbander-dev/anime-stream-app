<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shows = [
            [
                'name' => 'Fate / Stay Night: Unlimited Blade Works',
                'image' => 'hero-1.jpg',
                'description' => 'Uniquely synthesize compelling networks with enterprise technology. Seamlessly build enterprise schemas for multimedia based methodologies. Compellingly optimize web-enabled e-tailers for web-enabled scenarios. Quickly incubate innovative materials with wireless content. Rapidiously drive bricks-and-clicks core competencies whereas optimal ROI. Compellingly myocardinate maintainable data via extensible outsourcing. Objectively generate standards compliant.',
                'type' => 'TV Series',
                'studios' => 'Lerche',
                'date_aired' => 'Oct 02, 2019 to ?',
                'status' => 'Airing',
                'genre' => 'Action',
                'duration' => '24 min/ep',
                'quality' => 'HD'
            ],
            [
                'name' => 'The Seven Deadly Sins: Wrath of the Gods',
                'image' => 'trend-1.jpg',
                'description' => 'Rapidiously exploit goal-oriented networks whereas cross-media process improvements. Proactively predominate cost effective meta-services rather than process-centric systems. Competently negotiate competitive materials vis-a-vis B2B potentialities. Quickly build empowered resources through tactical processes. Seamlessly monetize cooperative total linkage vis-a-vis world-class ROI. Synergistically fashion corporate web services through an expanded array.',
                'type' => 'TV Series',
                'studios' => 'Lerche',
                'date_aired' => 'Oct 02, 2019 to ?',
                'status' => 'Airing',
                'genre' => 'Magic',
                'duration' => '29 min/ep',
                'quality' => 'Full HD'
            ]
        ];

        DB::table('shows')->insert($shows);
    }
}
