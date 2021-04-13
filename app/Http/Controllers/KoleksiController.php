<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KoleksiController extends Controller
{
    public function merek()
    {
       return view('koleksi-merek');
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
