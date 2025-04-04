<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'prenom', 'date_naissance', 'pathologie', 'chambre'];

    public function soins()
    {
        return $this->hasMany(Soin::class);
    }

    public function transmissions()
    {
        return $this->hasMany(Transmission::class);
    }
   
    public function agendas()
{
    return $this->belongsToMany(Agenda::class);
}

}

