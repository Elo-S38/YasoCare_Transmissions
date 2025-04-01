<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendaTable extends Migration
{
    /**
     * Exécute la migration.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda', function (Blueprint $table) {
            $table->id(); // Création de la colonne id (auto-incrémentée)
            $table->foreignId('patients_id')->constrained('patients')->onDelete('cascade');; // Identifiant du patient
            $table->foreignId('soignants_id')->constrained('soignants')->onDelete('cascade');; // Identifiant du soignant
            $table->dateTime('date_agenda'); // Date et heure de l'evenement agenda
            $table->enum('type_soignant', ['ASD', 'IDE', 'Medecin']);; // type de soignant concerné
            $table->text('description'); // Données de l'evenement agenda
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
        Schema::dropIfExists('agenda');
    }
}