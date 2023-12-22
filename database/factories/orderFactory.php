<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\order>
 */
class orderFactory extends Factory
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
            'user_id' => \App\Models\User::factory(), // Tạo ngẫu nhiên user_id bằng factory User
            'order_items' => json_encode([
                [
                    'product_id' => \App\Models\product::inRandomOrder()->first()->id, 
                    'color_id' => $randomColor ? $randomColor->id : null,
                    'quantity' => $this->faker->numberBetween(1, 10),
                    'price' => $this->faker->randomFloat(2, 10, 100),
                ],
            ],),
            'shipping_info' => json_encode([
                'name' => $this->faker->name,
                'mobile' => $this->faker->phoneNumber,
                'city' => $this->faker->city,
                'district' => $this->faker->word,
                'address' => $this->faker->address,
            ]),
            'total_price' => $this->faker->randomFloat(2, 50, 500),
            'total_price_after_discount' => $this->faker->randomFloat(2, 40, 480),
            'order_status' => $this->faker->randomElement(['Ordered', 'Shipped', 'Delivered']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
