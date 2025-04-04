<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Patient;
use App\Models\Soignant;

class SoinFactory extends Factory
{
    public function definition()
    {
        return [
            'type' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'date' => $this->faker->dateTime(),
            'patient_id' => Patient::factory(),
            'soignant_id' => Soignant::factory(),
        ];
    }
}


