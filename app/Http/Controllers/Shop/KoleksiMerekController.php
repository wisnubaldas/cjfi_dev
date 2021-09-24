<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Product;
class KoleksiMerekController extends Controller
{
    public function index()
    {
        $product = Product::with(['brand','image_product'])->paginate(9);
       return view('e-comerce.koleksi-merek',compact('product'));   
    }
}
