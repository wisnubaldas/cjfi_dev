<?php
namespace App\Helpers;
use \Illuminate\Filesystem\FilesystemManager;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
class UploadFile {
    
    public static function upload($file,$folder) {
        $mimetype = \GuzzleHttp\Psr7\mimetype_from_filename($file);
        $mimetype = \GuzzleHttp\Psr7\mimetype_from_extension($file);

        // $file = $request->file('file');
        // nama file
        $file_name = $file->getClientOriginalName();
        // ekstensi file
        $file_extention = $file->getClientOriginalExtension();
        // real path
        // $file_path = $file->getRealPath();
        // ukuran file
        $file_size = $file->getSize();
        // tipe mime
        $file_type = $file->getMimeType();
        // isi dengan nama folder tempat kemana file diupload
        // $file->move($folder,$file->getClientOriginalName());
        $file_path = Storage::url($file->store($folder));
        return \collect(\compact('file_name','file_extention','file_path','file_size','file_type'));
    }

    public static function base64_image($img,$folder,array $size){
        $folderPath = storage_path($folder); 
        $image_parts = explode(";base64,", $img);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $image_name = Str::random(40).'.'.$image_type;
        $file = $folderPath.$image_name;
        $image_url = $folder.$image_name;
        file_put_contents($file, $image_base64);
        // rezsize image
        $img = Image::make($file);
        // ->resize($size[0], $size[1]);
        $size = $img->filesize();
        $dpi = ['height'=>$img->height(),'width'=>$img->width()];
        $img->save($file, 60);
        return \collect(\compact('folderPath',
                                'image_name',
                                'image_url',
                                'image_type',
                                'file','size',
                                'dpi'));

        // Image::configure(array('driver' => 'imagick'));
        // $img = Image::make($img)->resize(300, 200);
        // return $img->response('png');
    }
    public static function remove_file($file)
    {
        return unlink($file);
    }
    
    public static function multiple_image($img,$folder = '',$dimensi){
        // dd(storage_path($folder));
        $folder = '../storage/app/public/blog/img/barang/';
        $url = '/storage/blog/img/barang/';
        $data = [];
        foreach ($img as $i => $v) {
                if(is_string($v))
                {
                    return abort(403, 'Request error pada image.');
                }
                // $nama = $v->getClientOriginalName();
                $nama = Str::random(40);
                $img = Image::make($v);
                $mime = $img->mime();
                $size = $img->filesize();
                $img->save($folder.$nama.'.jpg');

                $img2 = Image::make($v);
                // $img2->resize($dimensi['width']/2, $dimensi['height']/2);
                $img2->save($folder.'kecil/'.$nama.'.jpg');

                $img3 = Image::make($v);
                // $img3->resize($dimensi['width']*2, $dimensi['height']*2);
                $img3->save($folder.'besar/'.$nama.'.jpg');

                array_push($data,
                    array(  'nama'=>$nama.'.jpg',
                            'url_s'=>$url.'kecil/'.$nama.'.jpg',
                            'url_m'=>$url.$nama.'.jpg',
                            'url_l'=>$url.'besar/'.$nama.'.jpg',
                            )                
                );
        }
        return $data;
       
    }
    public static function make_name($length = 32)
    {
        $pool = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        return substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
    }
    
}