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

            $table->string("_id")->unique();
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->string('category');
            $table->integer('quantity')->nullable();
            $table->integer('sold')->default(0);
            $table->string('brand')->nullable();
            $table->string('tag')->nullable();

            $table->jsonb('images');
            $table->jsonb('color');
            // $table->foreignId('color_id')->nullable()->constrained('color')->onDelete('cascade');

            $table->jsonb('ratings');
            // $table->foreignId('users_id')->nullable()->constrained('users')->onDelete('cascade');

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
