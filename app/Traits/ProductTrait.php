<?php

namespace App\Traits;
use App\Models\Backend\Product;
use App\Models\Brand;
use App\Models\Motif;
use App\Models\Tipe;
use App\Models\Ukuran;
use App\Models\Backend\Warna;

use Yajra\Datatables\Datatables;
use Image;
use Illuminate\Support\Str;
trait ProductTrait
{
    public static function set_product($data)
    {
        $motif = new Motif;
        $motif->nama = $data->motif_id;
        $product = new Product;
        $product->name = collect($data->server)['REMOTE_ADDR'];
        $product->code = $data->code;
        $product->brand_id = $data->brand_id;
        $product->motif_id = (is_numeric($data->motif_id))?$data->motif_id : $motif->save(); $motif->id;
        $product->tipe_id = json_encode($data->tipe_id);
        $product->ukuran_id = $data->ukuran_id;
        $product->warna_id = json_encode($data->warna_id);
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
                // return  Datatables::of(Brand::with('brand_logo')->query())
                ->addColumn('action', function(BrandModel $brand) {
                    return "
                    <div class='btn-group'>
                    <a class='btn btn-warning btn-xs' href='/merek/edit/{$brand->id}'>Edit</a>
                    <a class='btn btn-danger btn-xs delete-data' href='javascript:;' data-link='/merek/destroy/{$brand->id}'>Delete</a>
                    </div>";
                })
                ->editColumn('logo',function($tbl){
                    // return $tbl->updated_at->format('d M Y - H:i:s');
                    return '<img src="'.url($tbl->logo).'" alt="" srcset="" width="100%">';

                })
                ->rawColumns(['action','logo'])
                ->make(true);
    }
    
}
