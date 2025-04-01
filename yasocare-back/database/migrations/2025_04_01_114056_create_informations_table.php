<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationsTable extends Migration
{
    /**
     * Exécute la migration.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informations', function (Blueprint $table) {
            $table->id(); // Création de la colonne id (auto-incrémentée)
            $table->foreignId('soignants_id')->constrained('soignants')->onDelete('cascade');// Identifiant du soignant
            $table->enum('destinataire', ['admin', 'ASD', 'IDE', 'Medecin', 'Tous']); // Destinataire du message
            $table->text('contenu'); // Contenu du message
            $table->dateTime('date_message'); // Date et heure du message
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
        Schema::dropIfExists('informations');
    }
}

