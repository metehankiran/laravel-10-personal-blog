<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $title = $this->faker->sentence(6);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => $this->faker->sentence(20),
            'content' => $this->faker->paragraph(20),
            'image' => $this->faker->imageUrl(640, 480),
            'is_published' => $this->faker->boolean,
            'is_featured' => $this->faker->boolean,
            'published_at' => $this->faker->dateTime,
            'category_id' => $this->faker->numberBetween(2, 8),
            'user_id' => 1,
            // tags is a JSON column
            'tags' => $this->faker->words(5),
            'views' => $this->faker->numberBetween(0, 1000),
            'likes' => $this->faker->numberBetween(0, 1000),
            'dislikes' => $this->faker->numberBetween(0, 1000),
        ];
    }
}
