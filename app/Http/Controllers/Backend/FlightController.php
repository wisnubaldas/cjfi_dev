<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FlightController extends Controller
{
    public function __construct() {
        $this->api_key = env('AVIATION_STACK');
        $this->uri = 'http://api.aviationstack.com/v1/flights?access_key='.$this->api_key;
    }

    public function index()
    {
        $response = Http::get($this->uri.'&flight_status=scheduled');
        return $response->json();
    }
}
