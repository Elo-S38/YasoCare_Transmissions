<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransmissionsTable extends Migration
{
    /**
     * Exécute la migration.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transmissions', function (Blueprint $table) {
            $table->id(); // Création de la colonne id (auto-incrémentée)
            $table->foreignId('patients_id')->constrained('patients')->onDelete('cascade');; // Identifiant du patient
            $table->foreignId('soignants_id')->constrained('soignants')->onDelete('cascade');; // Identifiant du soignant
            $table->dateTime('date_transmissions'); // Date et heure de la transmission
            $table->string('cible'); // Cible de la transmission
            $table->text('donnees'); // Données de la transmission
            $table->text('actions'); // Actions effectuées
            $table->text('resultat'); // Résultat de la transmission
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
        Schema::dropIfExists('transmissions');
    }
}



