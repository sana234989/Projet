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
        Schema::create('reservations_services', function (Blueprint $table) {
            $table->foreignId('id_reservation')->references('id')->on('reservations');
            $table->foreignId('id_service')->references('id')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations_services');
    }
};
