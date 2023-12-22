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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->string('category');
            $table->integer('quantity')->nullable();
            $table->integer('sold')->default(0);
            $table->string('brand')->nullable();
            // Tạo cột JSON để lưu trữ các hình ảnh
            $table->json('images');
            $table->string('tag')->nullable();

            $table->foreignId('color_id')->nullable()->constrained('color')->onDelete('cascade');

            $table->foreignId('users_id')->nullable()->constrained('users')->onDelete('cascade');

            $table->string('totalRating')->default(0);
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
        Schema::dropIfExists('product');
    }
};
