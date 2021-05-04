<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Models\Ukuran;
use App\Helpers\UploadFile;
use App\Models\Backend\Slide;
use App\Models\BrandLogo;
use App\Models\ImageAsset;
use App\Models\Tipe;
use App\Models\Motif;
use Image;
use Yajra\Datatables\Datatables;
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipe = Tipe::all();
        $brand_logo = BrandLogo::all();
        $size = Ukuran::all();
        return view('backend.brand',compact('size','brand_logo','tipe'));
    }
    public function grid(Request $request)
    {
        if($request->ajax()){
            return  Datatables::of(Brand::query())->make();
        }
        return view('backend.brand-grid');
    }

    public function save_image(Request $request)
    {
        if($request->file())
        {
            $file = $request->file('file');
            $image = Image::make($file->getRealPath()); // not sure about needing "getRealPath()" but hey, it works
            $imageName = UploadFile::make_name().'.'.explode('/',$image->mime())[1];
            
            $image->save(base_path('public/img/item/original/'.$imageName));
            $image->resize(448, 336, function ($constraint) {
                $constraint->aspectRatio();
            })->save(base_path('public/img/item/small/'.$imageName));
            $image->resize(640, 480, function ($constraint) {
                $constraint->aspectRatio();
            })->save(base_path('public/img/item/medium/'.$imageName));
            $image->resize(1024, 768, function ($constraint) {
                $constraint->aspectRatio();
            })->save(base_path('public/img/item/large/'.$imageName));

            $br = new ImageAsset;
            $br->name = $request->name;
            $br->desc = $request->desc;
            $br->status = $request->type;
            $br->image = $imageName;
            $br->image_medium = $imageName;
            $br->image_small = $imageName;
            $br->image_large = $imageName;;
            $br->brands_id = 0;
            $br->save();
            return ['id'=>$br->id,'name'=>$br->image];
        }
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $motif = Motif::firstOrNew(['nama'=>$request->motif]);
        $motif->nama = $request->motif;
        $motif->baru = 1;
        $motif->active = true;
        $motif->brand_logo_id = $request->brand;
        $motif->save();

        $brand =  new Brand;
        $brand->brand_logos_id = $request->brand;
        $brand->nama = $request->nama;
        $brand->desc = $request->desc;
        $brand->types_id = $request->tipe;
        $brand->ukurans_id = $request->ukuran;
        $brand->motifs_id =  $motif->id;
        $brand->image_assets_id = 0;
        $brand->save();

        ImageAsset::whereIn('id',$request->id_images)->update(['brands_id'=>$brand->id]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        //
    }
}
