<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\blog>
 */
class blogFactory extends Factory
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
            'description' => $this->faker->paragraph,
            'category' => $this->faker->word,
            'num_Views' => $this->faker->numberBetween(0, 1000),
            'is_Liked' => $this->faker->boolean,
            'is_Disliked' => $this->faker->boolean,
            'author' => $this->faker->name,
        ];
    }
}
