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
            //

            'title' => $this->faker->word,
            'author' => $this->faker->name,
            'category_id' => $this->faker->numberBetween(1,100),
            'description' => $this->faker->paragraph,
            'image' => $this->faker->imageUrl,
        ];
    }
}
