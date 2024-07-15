<?php

namespace Database\Seeders;

use App\Enums\CategoryEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => CategoryEnum::ADVENTURE->value,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => CategoryEnum::ACTION->value,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => CategoryEnum::MAGIC->value,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => CategoryEnum::ROMANCE->value,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('categories')->insert($categories);
    }
}
