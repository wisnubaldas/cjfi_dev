<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserBoking;
use \Carbon\Carbon;
class UserBokingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i=0; $i < 5000; $i++) {
        // kondisi boking masuk keluar
        $startDate = '-1 year';
        $endDate = '+1 year';
        $cek = $faker->randomElement(['in','out']);
        $keluar = null;
        // kalo masuk belom keluar
        $date = $faker->dateTimeBetween($startDate, $endDate, $timezone = null);
        $date = Carbon::parse($date);
        if ($date->year == '2020') {
            $dateBoking = $date->format('Y-m-d H:i:s');
            $masuk = $date->add($faker->randomNumber([3,10]),'day')->format('Y-m-d H:i:s');
            $keluar = $date->add($faker->randomNumber([11,40]),'day')->format('Y-m-d H:i:s');
            $void = 1;
            $user_id = $faker->numberBetween(1, 30);
            $id_lokasi = $faker->numberBetween(1, 50);
        } elseif($date->year == '2021') {
            $dateBoking = $date->format('Y-m-d H:i:s');
            $user_id = $faker->numberBetween(1, 50);
            $masuk = null;
                $cekMasuk = UserBoking::where('user_id',$user_id)->where('date_boking',$dateBoking)->first();
                if(!$cekMasuk || !$cekMasuk->masuk)
                {
                    $masuk = $date->add($faker->randomNumber([3,10]),'day')->format('Y-m-d H:i:s');
                }
            $keluar = null;
            $void = 0;
            $id_lokasi = $faker->numberBetween(1, 25);
        }else{
            $dateBoking = $date->format('Y-m-d H:i:s');
            $masuk = null;
            $keluar = null;
            $void = 0;
            $id_lokasi = $faker->numberBetween(1, 25);
            $user_id = $faker->numberBetween(1, 50);
        }

        $x = Carbon::parse($date);
            $boking = new UserBoking();
            $boking->user_id = $user_id;
            $boking->status_boking_id = $id_lokasi;
            $boking->masuk = $masuk;
            $boking->keluar = $keluar;
            $boking->void = $void;
            $boking->date_boking = $dateBoking;
            $boking->qr = $faker->isbn13;
            $boking->save();
        }
    }
}