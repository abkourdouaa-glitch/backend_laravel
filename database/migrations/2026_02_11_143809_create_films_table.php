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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('titre', 100);
            $table->string('pays')->nullable();
            $table->year('annee');
            $table->integer('duree')->unsigned()->default(date('Y'));
            $table->string('genre');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};

/*
        Schema::table('participations', function (Blueprint $table) {
            $table->enum('typeRole', ['principal', 'secondaire']);
        });
                    $table->id();
            $table->string('role');
            $table->foreignId('films_id')->constrained('films');
            $table->foreignId('acteur_id')->constrained('acteurs');
            $table->timestamps();

            1.ajouter typeRole
            db : seed
            creation de controller
            ->get()
            les conditions
            compact()
            afficher sur views
*/