<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SoignantFactory extends Factory
{
    public function definition()
    {
        return [
            'nom' => $this->faker->lastName(),
            'prenom' => $this->faker->firstName(),
            'specialite' => $this->faker->randomElement(['Infirmier', 'Aide-soignant', 'Médecin']),
        ];
    }
}

