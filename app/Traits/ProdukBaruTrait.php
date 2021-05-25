<?php

namespace App\Traits;
use App\Models\ProdukBaru;
use Image;
use Illuminate\Support\Str;
trait ProdukBaruTrait
{
    public function get_all_produk()
    {
        return ProdukBaru::all();
    }
    public function set_validate($request)
    {
        $this->validate($request, [
			'file' => 'required',
			'keterangan' => 'required',
		]);
    }
    public function set_produk($request)
    {
        

        $path = 'public/img/produk_baru/';
        if ($request->file('image')) {
            $file = $request->file('image');
            $image = Image::make($file->getRealPath()); // not sure about needing "getRealPath()" but hey, it works
            $imageName = Str::random(40).'.'.explode('/',$image->mime())[1];
            $image->save(base_path($path.$imageName));
            
        }

        $pr = new ProdukBaru;
        $pr->brand_id = 0;
        $pr->name = $request->name;
        $pr->image = '/img/produk_baru/'.$imageName;
        $pr->desc = 'baru';
        $pr->status = '1';
        $pr->save();
        return $pr->id;
    }
    public function get_produk_id($id)
    {
        return ProdukBaru::find($id);
    }
}
