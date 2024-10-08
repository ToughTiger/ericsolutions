<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\User::factory()->create([
            'name' => 'Santosh Pandey',
           'email' => 'santosh.cerdak@gmail.com',
            'password' => bcrypt('pass@123'),
       ]);

        \App\Models\Post::factory(100)->create();
         \App\Models\Visitor::factory(100)->create();
         \App\Models\Comment::factory(100)->create();
         \App\Models\Category::factory(100)->create();
         \App\Models\tag::factory(100)->create();




        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
