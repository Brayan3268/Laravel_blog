<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Post::factory(100)->create();
        $this->call([
            UserSeeder::class,
        ]);

        #If is a one seeder, can pass like a paremeter without an array
        #$this->call(UserSeeder::class);
    }
}
