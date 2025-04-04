<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soin extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'description', 'date', 'patient_id', 'soignant_id'];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function soignant()
    {
        return $this->belongsTo(Soignant::class);
    }
}
