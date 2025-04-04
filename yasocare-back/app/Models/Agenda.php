<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'tache', 'soignant_id', 'patient_id'];

    public function soignant()
    {
        return $this->belongsTo(Soignant::class);
    }
    public function patients()
{
    return $this->belongsToMany(Patient::class);
}

}
