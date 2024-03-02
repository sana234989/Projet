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
        Schema::create('reservation_table_restaurants', function (Blueprint $table) {
            $table->foreignId('idreservation')->references('id')->on('reservations');
            $table->foreignId('id_tablerestaurant')->references('id')->on('table_restaurants');
            $table->date('datereservation');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation_table_restaurants');
    }
};
