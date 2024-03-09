<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Create API'],
            ['name' => 'API Integration'],
            ['name' => 'BUg Fixing'],
            ['name' => 'UI/UX design'],
            ['name' => 'Documentation'],
            ['name' => 'Miscellaneous'],
        ];

        Category::insert($categories);
    }
}
