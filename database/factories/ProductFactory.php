<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->name(),
            'description'=> $this->faker->text(),
            'price'=> $this->faker->randomFloat(2, 0,999.99),
            'stock'=> 100,
            'category_id'=> $this->faker->numberBetween(1, 3),
        ];
    }
}
