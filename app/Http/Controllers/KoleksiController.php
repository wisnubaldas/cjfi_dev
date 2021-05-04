<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BrandLogo;
use App\Models\Brand;
use App\Models\Ukuran;
use App\Models\Tipe;
use App\Models\Motif;
use Illuminate\Database\Eloquent\Builder;
class KoleksiController extends Controller
{
    public $slide;
    public $brandLogo;
    public $ukuran;
    public $tipe;
    public $tiles;
    public function __construct() {
        $this->ukuran = Ukuran::all();
        $this->tipe = Motif::all();
    }
    public function merek($brand = 0,$type = 0, $ukuran = 0,$motif = 0)
    {
        session(['option' => ['brand'=>0,'type'=>0,'ukuran'=>0,'motif'=>0]]);
        
        if($type || $ukuran || $motif)
        {
            $this->tiles = $this->get_data_tiles($brand,$type,$ukuran,$motif);
        }
        $this->brand_logo = $this->get_brand_logo($brand);
        return view('koleksi-merek',['data'=>$this]);
    }
    protected function get_data_tiles($brand,$tipe,$ukuran,$motif)
    {
        if($tipe && $ukuran == 0 && $motif == 0)
        {
            session()->put('option.type', $tipe);
            // return 'cari tipe aja semua ukuran semua motif';
            return BrandLogo::with(['brands'=>function($query) use($tipe)
                            {
                                return $query->with(['image_asset','ukuran','tipe','motif'])
                                                ->where('types_id',$tipe)
                                                ->orderBy('ukurans_id');
                            },'motifs'])->find($brand);
        }
        if($tipe && $ukuran && $motif == 0)
        {
            session()->put('option.ukuran', $ukuran);
            session()->put('option.type', $tipe);

            return 'cari tipe sama ukuran semua motif';
        }
        if($tipe && $ukuran && $motif)
        {
            session()->put('option.motif', $motif);
            session()->put('option.ukuran', $ukuran);
            session()->put('option.type', $tipe);
            return 'cari tipe sama ukuran sama motif';
        }
        if($tipe == 0 && $ukuran && $motif == 0)
        {
            session()->put('option.ukuran', $ukuran);
            return 'cari semua tipe satu ukuran semua motif';
        }
        if($tipe == 0 && $ukuran == 0 && $motif)
        {
            session()->put('option.motif', $motif);
            return 'cari satu motif semua tipe semua ukuran';
        }
        if($tipe == 0 && $ukuran && $motif)
        {
            session()->put('option.motif', $motif);
            session()->put('option.ukuran', $ukuran);
            return 'cari semua tipe satu motif satu ukuran';
        }
        if($tipe && $ukuran == 0 && $motif)
        {
            session()->put('option.motif', $motif);
            session()->put('option.type', $tipe);
            return 'cari satu tipe semua ukuran satu motif';
        }
        
    }
    protected function get_brand_data($brand)
    {
        if($brand != 0)
        {
            session()->put('option.brand', $brand);
            return Brand::with(['ukuran','motif','tipe','image_asset'])->where('brand_logos_id',$brand)->get();
        }else{
            return Brand::with(['ukuran','motif','tipe','image_asset'])->inRandomOrder()->limit(20)->get();;
        }
    }
    protected function get_brand_logo($id = 0)
    {
        if($id != 0){
            session()->put('option.brand', $id);
            return BrandLogo::with(['brands'=>function($query)
            {
                return $query->with(['image_asset','ukuran','tipe','motif']);
            },'motifs'])->find($id);
        }else{
            return BrandLogo::with(['brands'=>function($query)
            {
                return $query->with(['image_asset','ukuran','tipe','motif']);
            },'motifs'])->get();
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
