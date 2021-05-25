<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ProdukBaruTrait;
class ProdukBaruController extends Controller
{
    use ProdukBaruTrait;
    public function index()
    {
        $data = $this->get_all_produk();
        return view('backend.produk-baru',compact('data'));
    }
    public function create(Request $request)
    {
        // $this->set_validate($request);
         $this->set_produk($request);
         return back();
    }
}
