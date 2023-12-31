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
        Schema::create('enq', function (Blueprint $table) {

            $table->string("_id")->unique();
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('mobile')->unique();
            $table->string('comment'); 
            $table->enum('status', ['Submitted', 'Contacted', 'In Progress'])->default('Submitted');
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
        Schema::dropIfExists('enq');
    }
};
