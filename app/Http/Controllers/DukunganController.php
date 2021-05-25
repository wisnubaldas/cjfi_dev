<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DukunganController extends Controller
{
    public function index()
    {
        return view('dukungan');
    }
}
