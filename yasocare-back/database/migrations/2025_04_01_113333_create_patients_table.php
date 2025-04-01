<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Exécute la migration.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id(); // Création de la colonne id (auto-incrémentée)
            $table->string('nom'); // Nom du patient
            $table->string('prenom'); // Prénom du patient
            $table->date('date_naissance'); // Date de naissance
            $table->text('adresse')->nullable(); // Adresse
            $table->string('telephone')->nullable(); // Numéro de téléphone
            $table->timestamps(); // Colonnes created_at et updated_at
        });
    }

    /**
     * Annule la migration.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}

