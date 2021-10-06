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
        return view('backend.dashboard-v3');
    }
    
}