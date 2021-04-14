<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BrandLogo;
class KoleksiController extends Controller
{
    public function merek()
    {

       return view('koleksi-merek',['logo'=>BrandLogo::all()]);
    }
    public function inspirasi(Type $var = null)
    {
        # code...
    }
    public function produk(Type $var = null)
    {
        # code...
    }
    public function tentang(Type $var = null)
    {
        # code...
    }
    public function berita(Type $var = null)
    {
        # code...
    }
    public function dukungan(Type $var = null)
    {
        # code...
    }
}
