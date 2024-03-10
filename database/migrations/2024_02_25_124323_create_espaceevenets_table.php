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
         Schema::create('espaceevenets', function (Blueprint $table) {
             $table->id();
             $table->string('name')->unique();
             $table->text('description');
             $table->string('statut');
             $table->integer('capacite');
             $table->double('prix');
             $table->string('image1');
             $table->string('image2');
             $table->string('image3');
             
         });
     }
 

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('espaceevenets');
    }
};
