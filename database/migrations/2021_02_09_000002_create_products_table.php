<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');

            $table->string('product_image', 1000)->default('text');

            $table->string('product_name');
            $table->string('product_type')->nullable();
            $table->decimal('price', 10, 2)->unsigned();
            $table->integer('quantity_in_stock')->unsigned();
            $table->decimal('vat', 10, 2);


            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
