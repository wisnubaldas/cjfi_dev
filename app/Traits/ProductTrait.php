<?php

namespace App\Traits;
use App\Models\Backend\Product;
use App\Models\Brand;
use App\Models\Motif;
use App\Models\Tipe;
use App\Models\Ukuran;
use App\Models\Backend\ImageProduct;
use App\Models\Backend\Warna;
use Yajra\Datatables\Datatables;
use Image;
use Illuminate\Support\Str;
trait ProductTrait
{
    public static function cek_warna($warna)
    {
        foreach ($warna as $v) {
            Warna::firstOrCreate([
                'name'=>$v
            ]);
        }
        return json_encode($warna);
    }
    public static function cek_motif($id)
    {
        if(is_numeric($id))
        {
            return $id;
        }
        $motif = new Motif;
        $motif->nama = $id;
        $motif->save();
        return $motif->id;
    }
    public static function set_product($data)
    {
        $product = new Product;
        $product->name = collect($data->server)['REMOTE_ADDR'];
        $product->code = $data->code;
        $product->brand_id = $data->brand_id;
        $product->motif_id = self::cek_motif($data->motif_id);
        $product->tipe_id = json_encode($data->tipe_id);
        $product->ukuran_id = $data->ukuran_id;
        $product->warna_id = self::cek_warna($data->warna_id);
        $product->surface = $data->surface;
        $product->depth = $data->depth;
        $product->weight = $data->weight;
        $product->desc = $data->desc;
        $product->save();
        return $product->id;
    }
    public static function all_warna()
    {
        return Warna::all()->pluck('name','id');
    }
    public static function all_ukuran()
    {
        return Ukuran::all()->pluck('nama','id');
    }
    public static function all_tipe()
    {
        return Tipe::all()->pluck('nama','id');
    }
    public static function all_brand()
    {
        return Brand::all()->pluck('name','id');
    }
    public static function all_motif()
    {
        return Motif::all()->pluck('nama','id');
    }
    public static function table()
    {
        $query = Product::select('products.*');
        return Datatables::of($query)
                ->addColumn('action', function($q) {
                    return "
                    <div class='btn-group'>
                    <a class='btn btn-warning btn-xs' href='/product/edit/{$q->id}'>Edit</a>
                    <a class='btn btn-danger btn-xs delete-data' href='javascript:;' data-link='{$q->id}'>Delete</a>
                    </div>";
                })
                ->addColumn('gambar',function($q){
                    $img = ImageProduct::where('product_id',$q->id)->get();
                    $images = '';
                    foreach ($img as $i) {
                        $thumb = url('img/product',$i->image_small);
                        $images .= '<img class="rounded h-30px m-2" src="'.$thumb.'">';
                    }
                    return $images;
                })
                ->editColumn('brand_id',function($tbl){
                    return Brand::find($tbl->brand_id)->name;
                })
                ->editColumn('motif_id',function($tbl){
                    return Motif::find($tbl->motif_id)->nama;
                })
                ->editColumn('tipe_id',function($tbl){
                    $tipe = Tipe::whereIn('id',$tbl->tipe_id)->get()->pluck('nama');
                    return implode(',',$tipe->toArray());
                })
                ->editColumn('ukuran_id',function($tbl){
                    return Ukuran::find($tbl->ukuran_id)->nama;
                })
                ->editColumn('warna_id',function($tbl){
                    return implode(',',$tbl->warna_id);
                })
                ->editColumn('desc',function($tbl){
                    return Str::limit($tbl->desc, 50);
                })
                ->rawColumns(['action','brand_id','tipe_id','gambar'])
                ->make(true);
    }    
}
