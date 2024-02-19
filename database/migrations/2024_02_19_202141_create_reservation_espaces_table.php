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
        Schema::create('reservation_espaces', function (Blueprint $table) {
            $table->foreignId('idreserv')->references('id')->on('reservations');
            $table->foreignId('idespace')->references('id')->on('espace_evenements');
           $table->integer('nbpersonne')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation_espaces');
    }
};
