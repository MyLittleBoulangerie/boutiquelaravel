<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\_OrderProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\_OrderProduct>
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
