<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Product::factory()->create();

        // $this->call([
        //     UserSeeder::class]);

        // DB::table('products')->insertGetId([
        //     'user_id' => User::all()->pluck('id')->last(),
        //     'product_image' => ,
        //     'product_name' => Str::random(10).'@gmail.com',
        //     'product_type' => Hash::make('password'),
        //     'price' => Hash::make('password'),
        //     'quantity_in_stock' => Hash::make('password'),
        //     'vat' => Hash::make('password'),

        // ]);

    }
}





