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
    public function parent_image(Request $request)
    {
        // dd($request->search);
        $results = ImageAsset::select('id','name as text')
        ->where('status','tiles')
        ->where('name', 'like', $request->search.'%')->get();
        return compact('results');
    }
    public function grid(Request $request)
    {
        if($request->ajax()){
            $query = Brand::with('brand_logo')->select('brands.*');
            return Datatables::of($query)
            // return  Datatables::of(Brand::with('brand_logo')->query())
            ->addColumn('action', function(Brand $brand) {
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
        return view('backend.brand-grid');
    }

    public function save_image(Request $request)
    {
        if($request->file())
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
        $brand->nama = strtoupper($request->nama);
        $brand->desc = ucwords($request->desc);
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
    public function edit($id)
    {
        $tipe = Blog::all_type();
        $motif = Blog::all_motif();
        $ukuran = Blog::all_ukuran();
        $brand = Brand::with(['image_asset'])->find($id);
        return view('backend.brand-edit',compact('brand','tipe','motif','ukuran'));
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
