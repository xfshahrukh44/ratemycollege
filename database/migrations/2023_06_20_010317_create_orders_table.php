<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('full_name')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('address')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('phoneno')->nullable();
            $table->string('qty')->nullable();
            $table->string('total')->nullable();
            $table->string('user_id')->nullable();
            $table->string('order_email')->nullable();
            $table->string('order_status')->nullable();
            $table->string('order_notes')->nullable();
            $table->string('order_company')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('card_token')->nullable();
            $table->string('invoice_number')->nullable();
            $table->string('payment_method')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
