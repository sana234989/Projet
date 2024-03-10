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
        Schema::create('restaurant_menus', function (Blueprint $table) {
            $table->string('name');
           
            $table->foreignId('idresturant')->references('id')->on('resataurants');
            $table->double('prix');
            $table->string('url');
           
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurant_menus');
    }
};
