<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Traits\ProductTrait;
class ProductController extends Controller
{
    use ProductTrait;
    public function index(Request $request)
    {
        if($request->ajax())
        {
            return ProductTrait::table();
        }
        return view('backend.product.index');
    }
    public function create()
    {
        $brand = ProductTrait::all_brand();
        $motif = ProductTrait::all_motif();
        $tipe = ProductTrait::all_tipe();
        $ukuran = ProductTrait::all_ukuran();
        $warna = ProductTrait::all_warna();
        return view('backend.product.create',compact('brand','motif','tipe','ukuran','warna'));
    }
    public function insert(Request $request)
    {
        ProductTrait::set_product($request);
        return back();
    }
}
