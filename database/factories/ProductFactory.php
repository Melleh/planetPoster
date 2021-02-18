<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'user_id' => User::all()->pluck('id')->last(),
            'product_image' => $this->faker->imageUrl($width = 300, $height = 300, 'cats'),
            'product_name' => $this->faker->numerify('Poster #'),
            'product_type' => $this->faker->randomDigit

        ];
    }
}
