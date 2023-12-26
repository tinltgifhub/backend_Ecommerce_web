<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {

            $table->string("_id")->unique();
            $table->string("user")->unique();
            // $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->json('orderItems');
            $table->json('shippingInfo');
            $table->decimal('totalPrice');
            $table->decimal('totalPriceAfterDiscount');
            $table->string('orderStatus')->default('Ordered');
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
        Schema::dropIfExists('order');
    }
};
