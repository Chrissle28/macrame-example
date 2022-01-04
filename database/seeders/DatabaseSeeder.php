<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Artisan::call('cache:clear');

        $admin = User::create([
            'name'     => 'admin',
            'email'    => 'admin@admin.com',
            'password' => bcrypt('secret1234'),
        ]);

        $this->call([
            ShipSeeder::class,
        ]);
    }
}
