<?php
namespace App\Traits;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\UserBoking;
use App\Models\StatusBoking;
    
trait DashboardTrait
{
    public $user_boking;
    public function boot()
    {
        $this->user_boking = new UserBoking;
    }
    
    public function jmlBoking()
    {
        $this->boot();
        return $this->user_boking->whereNull('masuk')
        ->whereNull('keluar')
        ->count();
    }
    public function totalMobilParkir()
    {
        return $this->user_boking->whereNotNull('masuk')->count();
    }
    public function totalMobilKeluar()
    {
        return $this->user_boking->whereNotNull('keluar')->count();
    }
    public function dataChart()
    {
        $perHari = $this->user_boking->select(DB::raw('count(id) as `data`'), DB::raw("DATE_FORMAT(date_boking, '%Y-%m-%d') tahun"))
            ->groupby('tahun');

        $perBulan = $this->perBulan($perHari->get());
        $perTahun = $this->perTahun($perHari->get());
        return compact('perHari','perBulan','perTahun');
    }
    public function perBulan($hari)
    {
        return $hari->map(function($a){
            return [
                        'bulan'=>substr($a['tahun'], 0,-3),
                        'data'=>$a['data']
                    ];
            // return substr(strrchr($a['tahun'], "-"), 0,-3);
        })->groupBy('bulan')->map(function($a){
            return collect($a)->sum('data');
        });
    }
    public function perTahun($bulan)
    {
        return $bulan->map(function($a){
            return [
                        'bulan'=>substr($a['tahun'], 0,-6),
                        'data'=>$a['data']
                    ];
            // return substr(strrchr($a['tahun'], "-"), 0,-3);
        })->groupBy('bulan')->map(function($a){
            return collect($a)->sum('data');
        });
    }
}