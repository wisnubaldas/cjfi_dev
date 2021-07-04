<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
class BrandController extends Controller
{
    public function index()
    {
        // return Brand::all();
        return view('backend.brand');
    }
    public function create()
    {
        return view('backend.brand-create');

    }
}
