<?php

namespace App\Http\Controllers\Cargo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class CargoController extends Controller
{
    public function __construct() {
        $this->api_key = env('AVIATION_STACK');
        $this->uri = 'http://api.aviationstack.com/v1/flights?access_key='.$this->api_key;
        $this->folder_file = 'json_file/';
    }

    public function flight_scheduled()
    {
        // store data from API
        // $response = Http::get($this->uri.'&flight_status=scheduled');
        // $this->put_file($this->folder_file.'scheduled.json',$response->body());
        $contents = json_decode($this->get_file($this->folder_file.'scheduled.json'));
        // dump($contents);
        return view('cargo.flight_schedule',compact('contents'));
    }
}
