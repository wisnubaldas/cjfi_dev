<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\StatusBoking;
use App\Traits\MainTrait;
class StatusBokingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    use MainTrait;
    public function run()
    {
        $r = [];
        for ($i=0; $i < 3; $i++) {
            $lantai = 'B'.($i+1);
            for ($x=0; $x < 25; $x++) {
                $r[] = ['lantai'=>$lantai, 'slot' => 'P'.($x+1)];
            }
        }
        foreach ($r as $key => $value) {
            $boking = new StatusBoking;
            $boking->lantai = $value['lantai'];
            $boking->slot = $value['slot'];
            $boking->status = 0;
            $boking->save();
        }
    }
}
