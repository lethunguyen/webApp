<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Book;
use App\Models\Student;

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
            'bookID' => 'book30',
            'title' => 'Mobile programming',
        ]);
        Book::create([
            'bookID' => 'book31',
            'title' => 'Web programming',
        ]);
        Book::create([
            'bookID' => 'book32',
            'title' => 'Math',
        ]);
        Book::create([
            'bookID' => 'book33',
            'title' => 'Physics',
        ]);

        Student::create([
            'studentFullName' => 'Nguyen Thi Lan',
            'studentIDNumber' => 'PKA9873',
        ]);

        Student::create([
            'studentFullName' => 'Nguyen Huu Manh',
            'studentIDNumber' => 'PKA9883',
        ]);
    }
}
