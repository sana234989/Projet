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
        Schema::create('roomstypes', function (Blueprint $table) {
            $table->id();
            $table->string('type', 400);
            $table->text('description');
            $table->integer('capacity');
            $table->string('nb chambre',30);
            $table->string('prix', 400);
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roomstypes');
    }
};
