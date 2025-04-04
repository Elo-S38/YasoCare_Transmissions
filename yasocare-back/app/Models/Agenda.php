<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    // Associer ce modèle à la table 'agendas' dans la base de données
    protected $table = 'agendas';  // Table au pluriel

    // Attributs qui peuvent être assignés en masse
    protected $fillable = ['date', 'tache', 'soignant_id'];  // Ajoute 'patient_id' si nécessaire dans la table pivot

    // Définir la relation avec le modèle Soignant (Un agenda appartient à un seul soignant)
    public function soignant()
    {
        return $this->belongsTo(Soignant::class);
    }

    // Définir la relation many-to-many avec le modèle Patient (Un agenda peut avoir plusieurs patients)
    public function patients()
    {
        return $this->belongsToMany(Patient::class);
    }
}

