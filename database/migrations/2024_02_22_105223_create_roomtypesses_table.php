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
        Schema::create('roomtypesses', function (Blueprint $table) {
            $table->id();
            $table->string('type', 400);
            $table->text('description');
            $table->text('detail');
            $table->integer('capacity');
            $table->integer('nb_chambre');
            $table->string('prix',30);
            $table->string('image',30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roomtypesses');
    }
};
