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
        Schema::create('reservation_chambres', function (Blueprint $table) {
            $table->foreignId('idreservation')->references('id')->on('reservations');
            $table->foreignId('idroomtype')->references('id')->on('roomstypes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation_chambres');
    }
};
