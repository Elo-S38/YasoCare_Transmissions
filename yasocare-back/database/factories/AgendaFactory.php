<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Soignant;

class AgendaFactory extends Factory
{
    public function definition()
    {
        return [
            'date' => $this->faker->date(),
            'tache' => $this->faker->sentence(),
            'soignant_id' => Soignant::factory(),
                    ];
    }
}
