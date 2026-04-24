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
        Schema::create('composant_plats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('composant_id')->constrained();
            $table->foreignId('plat')->constrained();
            $table->integer('quantite');
            $table->string('unité');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('composant_plats');
    }
};
