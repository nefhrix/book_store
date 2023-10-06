<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence,
            'category' => fake()->word,
            'isbn' => fake()->isbn13,
            'description' => fake()->paragraph,
            'book_image' => fake()->imageUrl,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
