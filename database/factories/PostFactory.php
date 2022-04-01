<?php

namespace Database\Factories;

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
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'meta_title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'summary' => $this->faker->sentence,
            'published' => $this->faker->boolean,
            'published_at' => $this->faker->dateTime,
            'content' => $this->faker->paragraph,
            'author_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
