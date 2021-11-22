<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('order_no');
            $table->unsignedBigInteger('user_id');
            $table->enum('status',['pending','processing','completed','decline'])->default('pending');
            $table->integer('total_quantity');
            $table->float('total_price');
            $table->boolean('is_paid')->default(false);
            $table->enum('payment_method',['cod','esewa','bank','khalit','ime_pay']);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('shipping_first_name')->nullable();
            $table->string('shipping_last_name')->nullable();
            $table->string('shipping_address')->nullable();
            $table->string('shipping_street')->nullable();
            $table->string('shipping_country')->nullable();
            $table->string('shipping_phone')->nullable();
            $table->string('shipping_postal_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
