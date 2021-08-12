<?php
namespace App\Traits;
/**
 * 
 */
use App\Traits\ProductTrait;
use App\Models\Backend\Product;
use App\Models\Backend\Warna;
use App\Models\Backend\ImageProduct;

use Illuminate\Support\Str;
use Image;
trait ProductImageTrait
{
    protected static function saveImage($data)
    {
        $id = ImageProduct::insertGetId($data);
        return array_merge($data,['id'=>$id]);
    }
    public static function getProductByMotif($motif_id)
    {
        return Product::where('motif_id',$motif_id)->first();
    }
    public static function setImageProduct($request,$product_id,$warna_id)
    {
        
        $response = [];
        $files = $request->file('files');
        $destinationPath = public_path('img/product/');

        if ($request->hasFile('files')) {
            foreach ($files as $file) {
                $name = $file->getClientOriginalName();
                $ext = $file->getClientOriginalExtension();
                $image = self::generate_nama($ext);
                $image_small = 'S_'.$image;
                $image_medium = 'M_'.$image;
                $image_large = 'L_'.$image;
                $status = 1;
                $desc = '';

                $data = self::saveImage(compact('name', 'product_id', 'warna_id','image','image_small','image_medium','image_large','status','desc'));
                array_push($response, [
                    "name"=> $data['name'],
                    "size"=> $file->getSize(),
                    "url"=> url('img/product',$data['image']),
                    "thumbnailUrl"=> url('img/product',$data['image_small']),
                    "deleteUrl"=> '/product-image/delete/'.$data['id'],
                    "deleteType"=> "DELETE"
                ]);
                $img = Image::make($file->getRealPath()); // not sure about needing "getRealPath()" but hey, it works
                $img->resize(100, 100, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath.'/'.'S_'.$image);
                $img->resize(800, 120, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath.'/'.'M_'.$image);
                $img->resize(2000, 1309, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath.'/'.'L_'.$image);
                // harus dibawah invension image
                $file->move($destinationPath,$image);
            }
        }
        return [ 'files'=>$response];
    }
    public static function get_warna($warna)
    {
        // dd($warna);
        return Warna::whereIn('name',$warna)->get()->pluck('name','id');
    }
    public static function generate_nama($ext)
    {
        return Str::random(5).date('YmdHis',strtotime('now')).'.'.$ext;;
    }
}
