<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TagCloud>
 */
class TagCloudFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $word = $this->faker->word;
        return [
            'name' => $word,
            'slug' => Str::slug($word),
            'is_featured' => $this->faker->boolean(30),
        ];
    }
}
