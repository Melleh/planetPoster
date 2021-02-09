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

            // forain key

            $table->string('product_name');
            $table->string('product_type');
            $table->decimal('price', 10, 2)->unsigned();
            $table->integer('quantity_in_stock')->unsigned();
            $table->decimal('vat', 10, 2);


            $table->timestamps();


            $table->foreign('artist_id')->references('id')->on('artists');



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
