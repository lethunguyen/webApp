<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Book;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            // 'name' => 'Test User 1',
            // 'email' => 'test1@example.com',
        ]);

        Book::create([
            'bookID' => 'book3',
            'title' => 'test programming',
        ]);
        
    }
}
