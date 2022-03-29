<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Products_Has_Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products_Has_Order>
 */
class Products_Has_OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product_id' => $this->faker->randomNumber(),
            'category_id'=> $this->faker->randomNumber(),
            'quantity' => $this->faker->randomNumber(),
        ];
    }
}
