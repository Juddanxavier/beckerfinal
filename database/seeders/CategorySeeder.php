<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'VACUUM PUMPS', 'description' => null, 'image' => null],
            ['name' => 'COMPRESSORS', 'description' => null, 'image' => null],
            ['name' => 'PRESSURE/VACUUM PUMPS', 'description' => null, 'image' => null],
            ['name' => 'SYSTEMS', 'description' => null, 'image' => null],
        ];

        foreach ($categories as $categoryData) {
            Category::firstOrCreate(
                ['name' => $categoryData['name']],
                $categoryData
            );
        }
    }
}
