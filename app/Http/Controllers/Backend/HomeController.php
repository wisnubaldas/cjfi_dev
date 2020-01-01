<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use App\Traits\DashboardTrait as dashboard;
class HomeController extends Controller
{
    use dashboard;
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
}
