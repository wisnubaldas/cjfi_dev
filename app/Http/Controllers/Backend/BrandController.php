<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\Brand;
class BrandController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax())
        {
            return Brand::brand_grid();
        }
        return view('backend.brand.brand');
    }
    public function create()
    {
        return view('backend.brand.brand-create');

    }
}
