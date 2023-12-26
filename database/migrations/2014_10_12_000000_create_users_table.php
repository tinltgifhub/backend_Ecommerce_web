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
        Schema::create('users', function (Blueprint $table) {

            $table->string("_id")->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('mobile')->unique();
            $table->string('role')->default('user');
            $table->boolean('isBlocked')->default(false);
            $table->json('cart');
            $table->json('wishlist')->nullable();       

            // Additional fields
            $table->string('refreshToken')->nullable();
            $table->timestamp('passwordChangedAt')->nullable();
            $table->string('passwordResetToken')->nullable();
            $table->timestamp('passwordResetExpires')->nullable();

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
        Schema::dropIfExists('users');
    }
};
