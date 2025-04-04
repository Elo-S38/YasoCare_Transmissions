<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transmission;
use App\Models\Patient;
use App\Models\Soignant;

class TransmissionSeeder extends Seeder
{
    public function run()
    {
        Transmission::factory(15)->create([
            'patient_id' => Patient::inRandomOrder()->first()->id,
            'soignant_id' => Soignant::inRandomOrder()->first()->id,
        ]);
    }
}


