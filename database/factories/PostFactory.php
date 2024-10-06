<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'author_id' => User::inRandomOrder()->first()->id,
            'title' => fake()->realText(50),
            'slug' => fake()->slug(),
            'content' => fake()->text(),
            'alt' => fake()->text(),
            'meta_description' => fake()->text(),
            'keywords' => fake()->text(),

        ];
    }
}
