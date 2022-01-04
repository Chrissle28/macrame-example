<?php

namespace Database\Seeders;

use App\Models\Ship;
use Illuminate\Database\Seeder;

class ShipSeeder extends Seeder
{
    public function run()
    {
        Ship::factory()
            ->hasCruises(5)
            ->count(15)
            ->create();
    }
}
