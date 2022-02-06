<?php

namespace App\Http\Controllers;

use App\Models\Brand;
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
use App\Traits\Brand as BrandTrait;
class BrandController extends Controller
{
    use BrandTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipe = $this->all_type();
        $brand_logo = $this->all_brand();
        $size = $this->all_ukuran();
        // return view('backend.brand',compact('size','brand_logo','tipe'));
    }
    public function parent_image(Request $request)
    {
        $results = $this->image_like($request->search);
        return compact('results');
    }
    public function grid(Request $request)
    {
        if($request->ajax()){
            return $this->brand_grid();
        }
        return view('backend.brand-grid');
    }

    public function save_image(Request $request)
    {
        if($request->file())
        {
            $imageName = $this->file_image($request);
            return $this->save_image($imageName,$request);
        }
    }
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->save_motive($request);
        $id_brand = $this->save_brand($request);
        ImageAsset::whereIn('id',$request->id_images)->update(['brands_id'=>$id_brand]);
        return back();
    }

   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipe = Blog::all_type();
        $motif = Blog::all_motif();
        $ukuran = Blog::all_ukuran();
        $brand = Brand::with(['image_asset'])->find($id);
        return view('backend.brand-edit',compact('brand','tipe','motif','ukuran'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::find($id);
        $motif = Motif::find($brand->motifs_id);
        $image = ImageAsset::where('brands_id',$id);
        foreach ($image->get() as $v) {
            if(File::exists(public_path('img/item/original/'.$v->image))){
                File::delete(public_path('img/item/original/'.$v->image));
                File::delete(public_path('img/item/medium/'.$v->image));
                File::delete(public_path('img/item/large/'.$v->image));
                File::delete(public_path('img/item/small/'.$v->image));
            }else{
                dump('File does not exists.');
            }
        }
        $image->delete();
        $motif->delete();
        $brand->delete();
        return back();
    }
    public function remove_image($id_image)
    {
        $image = ImageAsset::find($id_image);
        if(File::exists(public_path('img/item/original/'.$image->image))){
            File::delete(public_path('img/item/original/'.$image->image));
            File::delete(public_path('img/item/medium/'.$image->image));
            File::delete(public_path('img/item/large/'.$image->image));
            File::delete(public_path('img/item/small/'.$image->image));
        }else{
            dd('File does not exists.');
        }
        $image->delete();
        return back();
    }
}
