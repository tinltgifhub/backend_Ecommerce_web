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
        Schema::create('cart', function (Blueprint $table) {

            $table->string("_id")->unique();
            $table->string("userId")->unique();

            // $table->foreignId('users_id')->constrained('users')->onDelete('cascade');

            $table->json('productId');
            // $table->foreignId('product_id')->constrained('product')->onDelete('cascade');

            $table->integer('quantity');
            $table->decimal('price', 10, 2);
            $table->json('color');
            // $table->foreignId('color_id')->nullable()->constrained('color')->onDelete('cascade');
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
        Schema::dropIfExists('cart');
    }
};
