<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class pembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 20; $i++) {
            DB::table('pembayaran')->insert([
                'siswa_id' => $faker->randomElement([1,2,3,4,5,6,7,8,8,9,10]),
                'tgl_bayar' => Carbon::now()->format('y-m-d'),
                'bulan_bayar' =>  $faker->randomElement(['Januari','Febuari','Maret']),
                'tahun_bayar' => '2020',
                'jumlah_bayar' => 2000000,
                'spp_id'  => $faker->randomElement([1]),
                'status'  => $faker->randomElement(['bayar','belum']),
            ]);
        }
    }
}
