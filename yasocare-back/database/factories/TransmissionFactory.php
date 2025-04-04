<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Patient;
use App\Models\Soignant;

class TransmissionFactory extends Factory
{
    public function definition()
    {
        return [
            'date' => $this->faker->dateTime(),
            'contenu' => $this->faker->paragraph(),
            'patient_id' => Patient::factory(),
            'soignant_id' => Soignant::factory(),
        ];
    }
}

