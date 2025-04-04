<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Agenda;
use App\Models\Soignant;

class AgendaSeeder extends Seeder
{
    public function run()
    {
        Agenda::factory(10)->create([
            'soignant_id' => Soignant::inRandomOrder()->first()->id,
        ]);
    }
}
