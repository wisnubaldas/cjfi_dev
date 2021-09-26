<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\MobileTrait;
class MobileController extends Controller
{
    public $faker;
    use MobileTrait;
    public function __construct()
    {
        $this->middleware('auth');
        $this->faker = \Faker\Factory::create();
    }
    public function index()
    {
        return view('mobile.landing');
    }
    public function home($qr = null)
    {
        if($qr)
        {
            return view('mobile.qr-code', compact('qr'));
        }
        $user_boking = MobileTrait::getUserBoking(auth()->user()->id);
        return view('mobile.home',compact('user_boking'));
    }
    public function create_boking()
    {
        $slot = MobileTrait::getLantai();
        return view('mobile.create-boking',compact('slot'));
    }
    public function show_lantai($lantai)
    {
        $slot = MobileTrait::getSlot($lantai);
        return view('mobile.select-slot',compact('slot'));
    }
    public function boking_slot($id,Request $request)
    {
        if(!$request->masuk){
            return back()->with('error','Anda harus memasukkan tanggal masuk');
        }

        $cek_status = MobileTrait::checkBoking($request->masuk,$id);
        if(!$cek_status){
            MobileTrait::createBoking([
                'user_id'=>auth()->user()->id,
                'status_boking_id'=>$id,
                'qr'=>$this->faker->sha1,
                'masuk'=>$request->masuk,
            ]);
            return redirect('/m/home');
        }
        return back()->with('error','Tanggal '.$request->masuk.' sudah tidak dapat diboking');
    }
    public function getUserDateBoking($status_boking_id)
    {
        return MobileTrait::listBokingUser($status_boking_id);
    }
}
