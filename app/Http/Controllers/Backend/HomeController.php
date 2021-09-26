<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class HomeController extends Controller
{
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
        return view('backend.dashboard-v3');
    }
}
