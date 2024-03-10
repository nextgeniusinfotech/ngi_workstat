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
            ['name' => 'Documentation'],
            ['name' => 'Create API'],
            ['name' => 'UI/UX design'],
            ['name' => 'API Integration'],
            ['name' => 'Bug Fixing'],
            ['name' => 'Miscellaneous'],
            ['name' => 'Database Management'],
            ['name' => 'Testing and Quality Assurance'],
            ['name' => 'Client Communication'],
        ];
        

        Category::insert($categories);
    }
}
