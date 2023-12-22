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
        Schema::create('blog', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('category');
            $table->integer('num_Views')->default(0);
            $table->boolean('is_Liked')->default(false);
            $table->boolean('is_Disliked')->default(false);
            $table->string('author')->default('Admin');
            $table->timestamps();
        });
        Schema::create('blog_likes', function (Blueprint $table) {
            $table->foreignId('blog_id')->constrained('blog')->onDelete('cascade');
            $table->foreignId('users_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('blog_dislikes', function (Blueprint $table) {
            $table->foreignId('blog_id')->constrained('blog')->onDelete('cascade');
            $table->foreignId('users_id')->constrained('users')->onDelete('cascade');
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
        Schema::dropIfExists('blog_likes');
        Schema::dropIfExists('blog_dislikes');
        Schema::dropIfExists('blog');
    }
};
