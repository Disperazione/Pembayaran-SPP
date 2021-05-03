<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i=1; $i <= 3 ; $i++) {
            DB::table('kelas')->insert([
                'nama' => "X RPL {$i}"
            ]);
        }
    }
}
