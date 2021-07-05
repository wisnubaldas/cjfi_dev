<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ProductTrait;
class ProductController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax())
        {
            return PrductTrait::table();
        }
        return view('backend.product.index');
    }
}
