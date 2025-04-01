<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoignantsTable extends Migration
{
    /**
     * Exécute la migration.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soignants', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('nom');
            $table->string('prenom');
            $table->string('mail', 191)->unique();  // Limiter la taille de la colonne mail à 191 caractères
            $table->string('mdp');
            $table->enum('role', ['admin', 'ASD', 'IDE', 'Medecin']);
            $table->timestamps();
        });
    }

    /**
     * Annule la migration.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('soignants');
    }
}
