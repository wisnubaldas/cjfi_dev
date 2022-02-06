<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class BeritaController extends Controller
{
    public function __construct() {
        $this->agent = new Agent;
    }
    public function index()
    {
        return view('berita');
    }
}
