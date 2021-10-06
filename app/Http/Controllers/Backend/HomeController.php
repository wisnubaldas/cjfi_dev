<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use App\Traits\DashboardTrait as dashboard;
use App\Traits\MobilParkirTrait;

class HomeController extends Controller
{
    use dashboard, MobilParkirTrait;
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $agent = new Agent();
        if($agent->isMobile())
        {
            return redirect('/m');
        }

        $jml_boking = $this->jmlBoking();
        $mobil_parkir = $this->totalMobilParkir();
        $mobil_keluar = $this->totalMobilKeluar();
        $data_chart = $this->dataChart();
        return view('backend.dashboard-v3',compact('jml_boking','mobil_parkir','mobil_keluar','data_chart'));
    }
    public function slot_kosong(Request $request)
    {
        $parkiran = $this->getParkiran();
        return view('backend.slot-mobil',compact('parkiran'));
    }
    public function status_boking(Request $request)
    {
        if($request->ajax())
        {
            return $this->getBokingan($request->tanggal);
        }
        $boking = $this->getBokingan();
        return view('backend.list-boking',compact('boking'));

    }
}