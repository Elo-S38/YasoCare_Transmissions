<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Soignant;

class SoignantSeeder extends Seeder
{
    public function run()
    {
        Soignant::factory(5)->create();
    }
}

