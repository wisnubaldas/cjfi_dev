<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Psr7;
use GuzzleHttp\Client;

class FlightController extends Controller
{
    public function __construct() {
        $this->api_key = env('AVIATION_STACK');
        $this->uri = 'http://api.aviationstack.com/v1/flights?access_key='.$this->api_key;
    }

    public function index()
    {
        // $response = Http::get($this->uri.'&flight_status=scheduled');
        // return $response->json();
        return view('backend.flights.index');
    }
    public function flight()
    {
        return view('backend.flights.flight');
    }
    public function upload_dokument(Request $request)
    {
        $folder = 'F25F3ECB784433BFFD0D57FFD197097E';
        if($request->file())
        {
            $file = $request->file('file');
            $name = $file->hashName(); // Generate a unique, random name...
            $extension = $file->extension(); 
            $path = $file->store($folder);
            $uri = '/'.env('APP_STORAGE').'/'.$folder.'/'.$name;
            $client = new Client;
            $response = $client->request('POST', 'http://wisnubaldas.site:5000/model/predict', [
                'headers' => [
                        'Accept' => 'application/json',
                    ],
                'multipart' => [
                    [
                        'name'     => 'image',
                        'contents' => file_get_contents("../storage/app/public/".$path),
                        'filename' => $name
                    ]
                ]
            ]);
            $body = [];
            foreach(json_decode((string) $response->getBody())->text as $v){
                if (($key = array_search(" ", $v)) !== false) {
                    unset($v[$key]);
                }else{
                    array_push($body,$v);
                }
            }

            return compact('name','extension','uri','body');
        }
    }
}
