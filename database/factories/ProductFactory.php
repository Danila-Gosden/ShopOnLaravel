<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->lastName(),
            'price'=> rand(1505,25687),
            'code' => Str::random(10),
            'img' => 'none_image.png',
            'category_id' => rand(1,10),
            'description' => $this->faker->realText(500),
        ];
    }
}
