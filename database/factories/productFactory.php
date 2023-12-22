<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
 */
class productFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $randomColor = \App\Models\color::inRandomOrder()->first();
        return [
            'title' => $this->faker->unique()->sentence,
            'slug' => $this->faker->unique()->slug,
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'category' => $this->faker->word,
            'quantity' => $this->faker->randomNumber(2),
            'brand' => $this->faker->word,
            'tag' => $this->faker->word,
            'totalRating' => 0,
            'created_at' => now(),
            'updated_at' => now(),
            'color_id' => $randomColor ? $randomColor->id : null,
            'images' => [
                [
                    'public_id' => $this->faker->uuid,
                    'url' => $this->faker->imageUrl(),
                ],
            ],
        ];
    }
}
