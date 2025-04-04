<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PatientSeeder::class,
            SoignantSeeder::class,
            AgendaSeeder::class,
            SoinSeeder::class,
            TransmissionSeeder::class,
        ]);
    }
}

