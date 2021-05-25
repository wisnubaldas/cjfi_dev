<?php

namespace App\Traits;
use App\Models\Brand as BrandModel;
use Illuminate\Http\Request;
use App\Models\Ukuran;
use App\Helpers\UploadFile;
use App\Helpers\Blog;
use App\Models\Backend\Slide;
use App\Models\BrandLogo;
use App\Models\ImageAsset;
use App\Models\Tipe;
use App\Models\Motif;
use Image;
use File;
use Yajra\Datatables\Datatables;

trait Brand
{
    static public function all_type()
    {
        return Tipe::all();
    }
    static public function all_brand()
    {
        return BrandLogo::all();
    }
    static public function all_ukuran()
    {
        return Ukuran::all();
    }
    static public function image_like($name)
    {
        return ImageAsset::select('id','name as text')
        ->where('status','tiles')
        ->where('name', 'like', $name.'%')->get();
    }
    static public function brand_grid()
    {
        $query = BrandModel::with('brand_logo')->select('brands.*');
        return Datatables::of($query)
                // return  Datatables::of(Brand::with('brand_logo')->query())
                ->addColumn('action', function(BrandModel $brand) {
                    return "
                    <div class='btn-group'>
                    <a class='btn btn-warning btn-xs' href='/merek/edit/{$brand->id}'>Edit</a>
                    <a class='btn btn-danger btn-xs delete-data' href='javascript:;' data-link='/merek/destroy/{$brand->id}'>Delete</a>
                    </div>";
                })
                ->editColumn('created_at',function($tbl){
                    return $tbl->updated_at->format('d M Y - H:i:s');
                })
                ->rawColumns(['action'])
                ->make(true);
    }
    static public function file_image($request)
    {
        $file = $request->file('file');
            $image = Image::make($file->getRealPath()); // not sure about needing "getRealPath()" but hey, it works
            $imageName = UploadFile::make_name().'.'.explode('/',$image->mime())[1];
            switch ($request->type) {
                case 'foto':
                    // original
                    $image->resize(940, 500)->save(base_path('public/img/item/original/'.$imageName));
                    // small
                    $image->save(base_path('public/img/item/small/'.$imageName, 30));
                    // medium
                    $image->resize(1025, 908)->save(base_path('public/img/item/medium/'.$imageName,80));
                    // buat gambar slide
                    $image->save(base_path('public/img/item/large/'.$imageName,90));
                    break;
                case 'foto_tiles':
                     // original
                     $image->resize(500, 500)->save(base_path('public/img/item/original/'.$imageName));
                     // small
                     $image->save(base_path('public/img/item/small/'.$imageName, 30));
                     // medium
                     $image->resize(1025, 1025)->save(base_path('public/img/item/medium/'.$imageName,80));
                     // buat gambar slide
                     $image->save(base_path('public/img/item/large/'.$imageName,90));
                    break;
                case 'tiles':
                    // original
                    $image->save(base_path('public/img/item/original/'.$imageName));
                    // small
                    $image->save(base_path('public/img/item/small/'.$imageName, 30));
                    // medium
                    $image->save(base_path('public/img/item/medium/'.$imageName,80));
                    // buat gambar slide
                    $image->save(base_path('public/img/item/large/'.$imageName,90));
                    break;
            }
            return $imageName;
    }
    static public function save_image($imageName,$request)
    {
        $br = new ImageAsset;
        $br->name = strtoupper($request->name);
        $br->desc = ucwords($request->desc);
        $br->status = $request->type;
        $br->parent_id = ($request->parent_id == 'null')?0:$request->parent_id;
        $br->image = $imageName;
        $br->image_medium = $imageName;
        $br->image_small = $imageName;
        $br->image_large = $imageName;;
        $br->brands_id = 0;
        $br->save();
        return ['id'=>$br->id,'name'=>$br->image];
    }
    static public function save_motive($request)
    {
        $motif = Motif::firstOrNew(['nama'=>$request->motif]);
        $motif->nama = $request->motif;
        $motif->baru = 1;
        $motif->active = true;
        $motif->brand_logo_id = $request->brand;
        $motif->save();
        return $motif->id;
    }
    static public function save_brand($request)
    {
        $brand =  new BrandModel;
        $brand->brand_logos_id = $request->brand;
        $brand->nama = strtoupper($request->nama);
        $brand->desc = ucwords($request->desc);
        $brand->types_id = $request->tipe;
        $brand->ukurans_id = $request->ukuran;
        $brand->motifs_id =  $motif->id;
        $brand->image_assets_id = 0;
        $brand->save();
        return $brand->id;
    }
}
