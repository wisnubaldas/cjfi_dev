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
        for ($i=0; $i < 1000; $i++) {
        $date = $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 weeks', $timezone = null);
        $x = Carbon::parse($date);
            $boking = new UserBoking();
            $boking->user_id = $faker->numberBetween(1, 30);
            $boking->status_boking_id = $faker->numberBetween(1, 75);
            $boking->masuk = $date;
            $boking->keluar = Carbon::parse($date)->addDays($faker->numberBetween(1, 10));
            $boking->void = ($x->isLastYear() || $x->isLastMonth() || $x->isLastWeek())?1:0;
            $boking->qr = $faker->isbn13;
            $boking->save();
        }
    }
}
