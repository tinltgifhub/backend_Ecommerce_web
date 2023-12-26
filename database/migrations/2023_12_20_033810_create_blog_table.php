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

            $table->string("_id")->unique();
            $table->string('title');
            $table->text('description');
            $table->string('category');
            $table->integer('numViews')->default(0);
            $table->boolean('isLiked')->default(false);
            $table->boolean('isDisliked')->default(false);
            $table->jsonb('likes');
            $table->jsonb('dislikes');
            $table->string('author')->default('Admin');
            // $table->json('images');
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
        Schema::dropIfExists('blog');
    }
};
