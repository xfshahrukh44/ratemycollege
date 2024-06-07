<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderproducts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('order_id')->nullable();
            $table->string('order_product_id')->nullable();
            $table->string('order_product_name')->nullable();
            $table->string('order_product_price')->nullable();
            $table->string('order_product_qty')->nullable();
            $table->string('order_product_subtotal')->nullable();
            $table->string('order_user_id')->nullable();
            $table->string('variation_price')->nullable();
            $table->string('variants')->nullable();
            $table->string('image')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orderproducts');
    }
}
