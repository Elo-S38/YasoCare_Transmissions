<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Soin;
use App\Models\Patient;
use App\Models\Soignant;

class SoinSeeder extends Seeder
{
    public function run()
    {
        $patients = Patient::all();
        $soignants = Soignant::all();

        foreach ($patients as $patient) {
            Soin::factory(2)->create([
                'patient_id' => $patient->id,
                'soignant_id' => $soignants->random()->id,
            ]);
        }
    }
}


