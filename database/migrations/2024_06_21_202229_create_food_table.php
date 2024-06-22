<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('decs');
            $table->timestamps();
        });

        Schema::create('food', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('body');
            $table->unsignedInteger('category_id'); // Ensure this is unsigned
            $table->timestamps();
            $table->string('images');
            
            // Adding foreign key constraint
            // $table->foreign('category_id')
            //       ->references('id')
            //       ->on('categories')
            //       ->onDelete('set null');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food');
    }
};
