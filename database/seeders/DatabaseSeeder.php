<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        for ($count=0; $count < 10; $count++) {
            $this->call([
                UserSeeder::class,
                PhoneSeeder::class,
                AddressSeeder::class,
                BillingSeeder::class,
                PurchaseOrderSeeder::class
                ]);
        }
    }
}
