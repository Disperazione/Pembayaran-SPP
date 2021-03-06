<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([KelasSeeder::class]);
        $this->call([SiswaSeeder::class]);
        $this->call([PetugasSeeder::class]);
        $this->call([SppSeeder::class]);
        $this->call([pembayaranSeeder::class]);
    }
}
