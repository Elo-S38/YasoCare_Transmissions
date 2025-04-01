<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsencesTable extends Migration
{
    /**
     * Exécute la migration.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absences', function (Blueprint $table) {
            $table->id(); // Création de la colonne id (auto-incrémentée)
            $table->foreignId('patients_id')->constrained('patients')->onDelete('cascade');; // Identifiant du patient
            $table->foreignId('soignants_id')->constrained('soignants')->onDelete('cascade');; // Identifiant du soignant
            $table->enum('contenu', ['famille', 'hospit']);//choix limité à 2
            $table->dateTime('date_depart'); // date depart
            $table->dateTime('date_retour')->nullable(); // date retour nullable
                  });
    }

    /**
     * Annule la migration.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absences');
    }
}
