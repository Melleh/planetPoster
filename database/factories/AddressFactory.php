<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->pluck('id')->last(),
            'street' => $this->faker->streetName,
            'house_number' => $this->faker->buildingNumber,
            'addition' => $this->faker->optional($weight = 0.3)->randomLetter,
            'city' => $this->faker->city,
            'postal_code' => $this->faker->numberBetween($min = 7000, $max = 9000),
            'country' => $this->faker->country
        ];
    }
}
