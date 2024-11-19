<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Categories;
use App\Models\Posts;
use App\Models\User;
use Database\Factories\PostCategoriesFactory;
use Database\Factories\PostsFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Posts::factory(100)->create();
        Categories::factory(100)->create();
        User::factory(100)->create();
        PostCategoriesFactory::times(100)->create();
    }
}
