<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('e-comerce.home');
    }
    public function product_detail()
    {
        return view('e-comerce.product_detail');
    }
    public function interior()
    {
        return view('keramik-1.home');
    }
}
