<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ProductImageTrait;
use App\Models\Motif;
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
        $validated = $request->validate([
            'id_product' => 'required',
            'warna' => 'required',
            'status' => 'required',
        ]);
        return ProductImageTrait::setImageProduct($request);
    }
    public function warna(Request $request)
    {
        return ProductImageTrait::get_warna($request->warna);
    }
}
