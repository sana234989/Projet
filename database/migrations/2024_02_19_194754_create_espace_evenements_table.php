<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('espace_evenements', function (Blueprint $table) {
            $table->id();
            $table->string('nom_espace', 70)->nullable(); // Utilisez nullable() pour permettre les valeurs nulles
            $table->text('description')->nullable(); // Utilisez nullable() pour permettre les valeurs nulles
            $table->string('disponibilite')->nullable(); // Utilisez nullable() pour permettre les valeurs nulles
            $table->integer('capacite')->nullable(); // Utilisez nullable() pour permettre les valeurs nulles
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('espace_evenements');
    }
};
