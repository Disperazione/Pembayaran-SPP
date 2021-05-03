<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 2; $i++) {
            DB::table('petugas')->insert([
                'username' => $faker->randomElement(['admin','petugas']),
                'level' => $faker->randomElement(['admin', 'petugas']),
                'password' => Hash::make('password')
            ]);
        }
    }
}
