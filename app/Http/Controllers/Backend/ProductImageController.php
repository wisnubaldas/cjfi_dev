<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ProductImageTrait;
use App\Models\Motif;
use Illuminate\Support\Str;
class ProductImageController extends Controller
{
    public function index()
    {
        // if($request->ajax())
        // {
        //     return ProductTrait::table();
        // }
        return view('backend.product-image.index');
    }
    public function create()
    {
        return view('backend.product-image.create');
    }
    public function get_motif(Request $request)
    {
        if(isset($request->search))
        {
            return Motif::select('id','nama as text')->where('nama','like',$request->search.'%')->paginate();
        }
        return Motif::select('id','nama as text')->paginate();
    }
    public function get_product_by_motif($motif_id)
    {
        return ProductImageTrait::getProductByMotif($motif_id);
    }

    public function upload_image(Request $request)
    {
        $response = [];
        $files = $request->file('files');
        if ($request->hasFile('files')) {
            foreach ($files as $file) {
                $name = Str::snake($file->getClientOriginalName());
                array_push($response, [
                    "name"=> $file->getClientOriginalName(),
                    "size"=> $file->getSize(),
                    "url"=> url('img/product',$name),
                    "thumbnailUrl"=> url('img/product',$name),
                    "deleteUrl"=> url('img/product',$name),
                    "deleteType"=> "DELETE"
                ]);

                $file->move(public_path('img/product'),$name);
            }
        }
        return [ 'files'=>$response];
    }
}
