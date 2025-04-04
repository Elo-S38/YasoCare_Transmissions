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
        Soin::factory(20)->create([
            'patient_id' => Patient::inRandomOrder()->first()->id,
            'soignant_id' => Soignant::inRandomOrder()->first()->id,
        ]);
    }
}

