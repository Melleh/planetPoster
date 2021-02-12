<?php

namespace Database\Factories;

use App\Models\PurchaseOrder;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PurchaseOrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PurchaseOrder::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'order_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'Order_time' => $this->faker->time($format = 'H:i:s', $max = 'now')

        ];
    }
}
