<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    public function switch($language = '')
    {
        // Simpan locale ke session.
        request()->session()->put('locale', $language);
        // Arahkan ke halaman sebelumnya.
        return redirect()->back();
    }
}
