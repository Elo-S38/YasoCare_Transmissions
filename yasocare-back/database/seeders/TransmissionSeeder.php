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
        $patients = Patient::all();
        $soignants = Soignant::all();

        foreach ($patients as $patient) {
            Transmission::factory(2)->create([
                'patient_id' => $patient->id,
                'soignant_id' => $soignants->random()->id,
            ]);
        }
    }
}



