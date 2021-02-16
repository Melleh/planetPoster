<?php

namespace Database\Factories;

use App\Models\Billing;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BillingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Billing::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->pluck('id')->last(),
            'creditcard_type' => $this->faker->creditCardType,    // string
            'creditcard_number' => $this->faker->creditCardNumber,  // bigInteger
            'creditcard_expiration_date' => $this->faker->creditCardExpirationDate, // date
            'iban' => $this->faker->iban($countryCode = null)    // string

        ];
    }
}
