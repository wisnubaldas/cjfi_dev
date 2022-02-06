<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BrandLogo;
use App\Models\Brand;
use App\Models\Ukuran;
use App\Models\Tipe;
use App\Models\Motif;
use App\Models\ImageAsset;
use Illuminate\Database\Eloquent\Builder;
use App\Helpers\UploadFile;
use App\Helpers\Blog;
use App\Traits\DesainInspirasi;
use App\Traits\ProdukBaruTrait;

class KoleksiController extends Controller
{
    use DesainInspirasi, ProdukBaruTrait;
    public $slide;
    public $brandLogo;
    public $ukuran;
    public $tipe;
    public $tiles;
    protected $blog;
    public function __construct() {
        $this->blog = new Blog;
        $this->ukuran = $this->blog->all_ukuran();
        $this->tipe = $this->blog->all_motif();
    }
    public function dekorasi_detail($parent_id)
    {
        return ImageAsset::where('parent_id',$parent_id)->first();
    }
    public function detail($id)
    {
        $this->brand_logo = $this->get_brand_logo(session('option.brand'));
        $this->detail = Brand::with(['image_asset','ukuran','tipe','motif'])->find($id);
        return view('koleksi-detail',['data'=>$this]);
    }
    public function merek($brand = 0,$type = 0, $ukuran = 0,$motif = 0)
    {
        Blog::set_option();
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
            $x = $this->blog->only_type($tipe,$brand);
            return $x->brands->groupBy('ukurans_id')->values();
        }
        if($tipe && $ukuran && $motif == 0)
        {
            session()->put('option.ukuran', $ukuran);
            session()->put('option.type', $tipe);
            $x = $this->blog->type_ukuran($tipe,$ukuran,$brand);
            return $x->brands->groupBy('ukurans_id')->values();
            // return 'cari tipe sama ukuran semua motif';
        }
        if($tipe && $ukuran && $motif)
        {
            session()->put('option.motif', $motif);
            session()->put('option.ukuran', $ukuran);
            session()->put('option.type', $tipe);
            $x = $this->blog->tipe_ukuran_motif($tipe,$ukuran,$motif,$brand);
            return $x->brands->groupBy('ukurans_id')->values();
            // return 'cari tipe sama ukuran sama motif';
        }
        if($tipe == 0 && $ukuran && $motif == 0)
        {
            session()->put('option.ukuran', $ukuran);
            $x = $this->blog->only_ukuran($ukuran,$brand);
            return $x->brands->groupBy('ukurans_id')->values();
            // return 'cari semua tipe satu ukuran semua motif';
        }
        if($tipe == 0 && $ukuran == 0 && $motif)
        {
            session()->put('option.motif', $motif);
            $x = $this->blog->only_motif($motif,$brand);
            return $x->brands->groupBy('ukurans_id')->values();
            // return 'cari satu motif semua tipe semua ukuran';
        }
        if($tipe == 0 && $ukuran && $motif)
        {
            session()->put('option.motif', $motif);
            session()->put('option.ukuran', $ukuran);
            $x = $this->blog->ukuran_motif($ukuran,$motif,$brand);
            return $x->brands->groupBy('ukurans_id')->values();
            // return 'cari semua tipe satu motif satu ukuran';
        }
        if($tipe && $ukuran == 0 && $motif)
        {
            session()->put('option.motif', $motif);
            session()->put('option.type', $tipe);
            $x = $this->blog->type_motif($tipe,$motif,$brand);
            return $x->brands->groupBy('ukurans_id')->values();
            // return 'cari satu tipe semua ukuran satu motif';
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

    public function inspirasi_id($id)
    {
        return $this->get_inspirasi_id($id);
    }
    public function inspirasi($menu = null)
    {
        switch ($menu) {
            case 'interior':
                    $data = $this->get_interior();
                break;
            case 'exterior':
                    $data = $this->get_exterior();
                break;
            default:
                    $data = $this->all_desain();
                break;
        }
        
        return view('koleksi-inspirasi',compact('data'));
    }
    public function produk($id = null)
    {
        if($id){
            return $this->get_produk_id($id);
        }
        $data = $this->get_all_produk();
        return view('koleksi-produk-baru',compact('data'));
    }
}
