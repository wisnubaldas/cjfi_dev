<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BrandLogo;
use App\Models\Brand;
use App\Models\Ukuran;
use App\Models\Tipe;
class KoleksiController extends Controller
{
    public $slide;
    public $brandLogo;
    public $ukuran;
    public $tipe;
    public $tiles;
    public $by_motif;
    public function __construct() {
        session(['option' => 
            ['brand'=>0,
            'type'=>0,
            'ukuran'=>0,
            'motif'=>0]
        ]);
        $this->ukuran = Ukuran::all();
        $this->tipe = Tipe::all();
    }
    public function merek($brand = 0,$type = 0, $ukuran = 0,$motif = 0)
    {
        $this->tiles = $this->get_data_tiles($brand,$type,$ukuran,$motif);
        $this->brandLogo = $this->get_brand_logo($brand);
        $this->slide = $this->get_brand_data($brand);
        return view('koleksi-merek',['data'=>$this]);
    }
    protected function get_data_tiles($brand,$tipe,$ukuran,$motif)
    {
        $dx = Brand::where('brand_logos_id',$brand);
        if($tipe != 0)
        {
            session()->put('option.type', $tipe);
            $dx->where('type_id',$tipe);
        }
        if($ukuran != 0)
        {
            session()->put('option.ukuran', $ukuran);
            $dx->where('ukuran_id',$ukuran);
        }
        if($motif != 0)
        {
            session()->put('option.motif', $motif);
            // $dx->where('ukuran_id',$motif);
        }
        if($brand == 0)
        {
            return null;
        }
        return $dx->get();
    }
    protected function get_brand_data($brand)
    {
        if($brand != 0)
        {
            session()->put('option.brand', $brand);
            return Brand::where('brand_logos_id',$brand)->get();
        }else{
            return Brand::inRandomOrder()->limit(20)->get();;
        }
    }
    protected function get_brand_logo($id = 0)
    {
        
        if($id != 0){
            return BrandLogo::find($id);
        }else{
            return BrandLogo::all();
        }
    }

    public function inspirasi(Type $var = null)
    {
        # code...
    }
    public function produk(Type $var = null)
    {
        # code...
    }
    public function tentang(Type $var = null)
    {
        # code...
    }
    public function berita(Type $var = null)
    {
        # code...
    }
    public function dukungan(Type $var = null)
    {
        # code...
    }
}
