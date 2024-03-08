<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(50)->create();

        Admin::updateOrCreate(
            [
                'role' => 0,
                'username' => 'ngi_admin',
                'email' => 'ngi_admin@gmail.com',
                'password' => Hash::make('ngi@admin')
            ]
        );
        Admin::updateOrCreate(
            [
                'role' => 1,
                'username' => 'ngi_developer',
                'email' => 'ngi_developer@gmail.com',
                'password' => Hash::make('ngi@admin')
            ]
        );

        $this->call([
            CategorySeeder::class
        ]);
    }
}
