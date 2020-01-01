<?php
namespace App\Traits;
use App\Models\StatusBoking;
use App\Models\UserBoking;
use Carbon\Carbon;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
trait MobileTrait
{
    public static function getLantai()
    {
        return StatusBoking::selectRaw('lantai, count(*) as slot')
                ->groupBy('lantai')
                ->get();
    }
    public static function getSlot($lantai)
    {
        return StatusBoking::
                where('lantai', '=', $lantai)
                ->paginate(10);
    }
    public static function checkBoking($masuk,$stsBoking)
    {
        $c = UserBoking::whereDate('masuk', '=', Carbon::parse($masuk))
        ->where('status_boking_id', '=', $stsBoking)
        ->count();
        return ($c > 0)? true : false;
    }
    public static function createBoking($data)
    {
        $boking = new UserBoking();
        $boking->user_id = $data['user_id'];
        $boking->status_boking_id = $data['status_boking_id'];
        $boking->masuk = Carbon::parse($data['masuk']);
        $boking->qr = $data['qr'];
        $boking->save();

        $stsBoking = StatusBoking::find($data['status_boking_id']);
        $stsBoking->status = 1;
        $stsBoking->save();
    }

    public static function listBokingUser($id)
    {
        return UserBoking::select('date_boking')
        ->where('status_boking_id', '=', $id)
        ->whereNull('masuk')
        ->where('void', '=', 0)->paginate(5);
    }
    public static function getUserBoking($id)
    {
        return UserBoking::with('status_boking')
        ->where('void', '=', 0)
        ->where('user_id', '=', $id)->paginate(10);
    }
    

}
