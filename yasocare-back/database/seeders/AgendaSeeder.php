<?php



namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Agenda;
use App\Models\Soignant;
use App\Models\Patient;

class AgendaSeeder extends Seeder
{
    public function run()
    {
        $soignants = Soignant::all();
        $patients = Patient::all();

        $agendas = Agenda::factory(5)->create([
            'soignant_id' => $soignants->random()->id,
        ]);

        foreach ($agendas as $agenda) {
            $agenda->patients()->attach(
                $patients->random(2)->pluck('id')->toArray()
            );
        }
    }
}
