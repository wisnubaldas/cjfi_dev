<?php
/**
 * 
 */
namespace App\Traits;
use App\Models\UserBoking;
use App\Models\StatusBoking;
use Carbon\Carbon;
trait MobilParkirTrait
{
    public function getParkiran($tanggal = null)
    {
        if(!$tanggal)
        {
            $tanggal = Carbon::parse('now')->format('Y-m-d');
        }
        $statBoking = StatusBoking::with(['user_boking'=>function($q) use ($tanggal){
            return $q->with('user')->where('masuk',$tanggal)->whereNull('keluar');
        }])->get();
        // dd($statBoking->toArray());
        
        return $statBoking->groupBy('lantai');
    }
    public function getBokingan($tanggal = null)
    {
        if(!$tanggal)
        {
            $tanggal = Carbon::parse('now')->format('Y-m-d');
        }
        return UserBoking::with('user')->where('date_boking',$tanggal)->where('void',0)->get();
    }
}