<?php
namespace App\Helpers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
// load models
use App\Models\Ukuran;
use App\Models\Motif;
use App\Models\BrandLogo;
use App\Models\Brand;
use App\Models\Tipe;

class Blog {
    public function tipe_ukuran_motif($tipe,$ukuran,$motif,$brand)
    {
      return BrandLogo::with(['brands'=>function($query) use($tipe,$ukuran,$motif)
            {
                return $query->with(['image_asset','ukuran','tipe','motif'])
                                ->where('ukurans_id',$ukuran)
                                ->where('types_id',$tipe)
                                ->where('motifs_id',$motif)
                                ->orderBy('ukurans_id');
            },'motifs'])->find($brand);
    }
    public function type_motif($tipe,$motif,$brand)
    {
      return BrandLogo::with(['brands'=>function($query) use($tipe,$motif)
            {
                return $query->with(['image_asset','ukuran','tipe','motif'])
                                ->where('types_id',$tipe)
                                ->where('motifs_id',$motif)
                                ->orderBy('ukurans_id');
            },'motifs'])->find($brand);
    }
    public function ukuran_motif($ukuran,$motif,$brand)
    {
      return BrandLogo::with(['brands'=>function($query) use($ukuran,$motif)
            {
                return $query->with(['image_asset','ukuran','tipe','motif'])
                                ->where('ukurans_id',$ukuran)
                                ->where('motifs_id',$motif)
                                ->orderBy('ukurans_id');
            },'motifs'])->find($brand);
    } 
    public function type_ukuran($type,$ukuran,$brand)
    {
      return BrandLogo::with(['brands'=>function($query) use($type,$ukuran)
            {
                return $query->with(['image_asset','ukuran','tipe','motif'])
                                ->where('ukurans_id',$ukuran)
                                ->where('types_id',$type)
                                ->orderBy('ukurans_id');
            },'motifs'])->find($brand);
    }
    public function only_motif($motif,$brand)
    {
      return BrandLogo::with(['brands'=>function($query) use($motif)
            {
                return $query->with(['image_asset','ukuran','tipe','motif'])
                                ->where('motifs_id',$motif)
                                ->orderBy('ukurans_id');
            },'motifs'])->find($brand);
    }
    public function only_ukuran($ukuran,$brand)
    {
      return BrandLogo::with(['brands'=>function($query) use($ukuran)
            {
                return $query->with(['image_asset','ukuran','tipe','motif'])
                                ->where('ukurans_id',$ukuran)
                                ->orderBy('ukurans_id');
            },'motifs'])->find($brand);
    }
    public function only_type($tipe,$brand)
    {
      return BrandLogo::with(['brands'=>function($query) use($tipe)
            {
                return $query->with(['image_asset','ukuran','tipe','motif'])
                                ->where('types_id',$tipe)
                                ->orderBy('ukurans_id');
            },'motifs'])->find($brand);
    }
    static public function image_uri($type,$name)
    {
      return url('img/item/'.$type.'/'.$name);
    }
    static public function all_type()
    {
      return Tipe::all();
    }
    static public function all_motif()
    {
      return Motif::all();
    }
    static public function all_ukuran()
    {
      return Ukuran::all();
    }
    public static function set_option()
    {
      session(['option' => ['brand'=>0,'type'=>0,'ukuran'=>0,'motif'=>0]]);
    }
}