<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\cart>
 */
class cartFactory extends Factory
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
            'users_id' => \App\Models\User::factory(),
            'product_id' => \App\Models\product::factory(),
            'quantity' => $this->faker->randomNumber(2),
            'price' => $this->faker->randomFloat(2, 10, 100),
            'color_id' => $randomColor ? $randomColor->id : null,

        ];
    }
}
