<?php

namespace App\Traits;
use Image;
use App\Models\DesignInspirasi;
trait DesainInspirasi
{
    public static function all_desain()
    {
        return DesignInspirasi::all();
    }
    public static function get_interior()
    {
        return ['data'=>'desain interior'];
    }
    public static function get_exterior()
    {
        return ['data'=>'desain exterior'];
    }
    public static function create_desain($array)
    {
        $data = new DesignInspirasi;
        $data->name = $array['name'];
        $data->image = $array['image'];
        $data->image_icon = $array['image_icon'];
        $data->status = $array['status'];
        $data->void = 1;
        $data->save();
        return $data->id;
    }
    public static function upload_image($file,$path)
    {
        $image = Image::make($file->getRealPath()); // not sure about needing "getRealPath()" but hey, it works
        $imageName = self::str_gen().'.'.explode('/',$image->mime())[1];
        $image->resize(940, 420)
                ->save(base_path($path.$imageName));
        return $imageName;
    }
    static public function str_gen()
    {
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        return substr(str_shuffle(str_repeat($pool, 5)), 0, 15);
    }
}
