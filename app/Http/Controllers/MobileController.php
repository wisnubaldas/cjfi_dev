<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MobileController extends Controller
{
    public function index()
    {
        return view('mobile.landing');
    }
    public function home()
    {
        return view('mobile.home');
    }
    public function item_detail()
    {
        return view('mobile.item-detail');
    }
    public function set_session(Request $request)
    {
        return  session(['sess' => $request->sess]);
    }
}
