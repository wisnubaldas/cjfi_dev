<?php
namespace App\Traits;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

trait Corerong 
{
    public static function url_hash($path)
    {
        return Hash::make($path);
    }
    public static function url_encode(string $path)
    {
        return Crypt::encryptString($path);
    }
    public static function url_decode(string $path)
    {
        return Crypt::decryptString($encryptedValue);
    }
    public static function include_route_files($folder)
    {
        try {
            $rdi = new \RecursiveDirectoryIterator($folder);
            $it = new \RecursiveIteratorIterator($rdi);
            while ($it->valid()) {
                if (! $it->isDot() && $it->isFile() && $it->isReadable() && $it->current()->getExtension() === 'php') {
                    require $it->key();
                }
                $it->next();
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    public static function list_all_folder($dir,&$new_json = [])
    {

        $ffs = scandir($dir);
        foreach ($ffs as $i => $ff) {
            if ($ff != '.' && $ff != '..')  {
                $new_dir = $dir.'/'.$ff;
                if(is_dir($new_dir))
                {
                    if(Str::after($new_dir, $dir))
                    {
                        $new_json[] = [
                                    Str::after($new_dir, $dir),
                                    $dir.'/'.$new_dir,
                        ];
                    }
                    self::list_all_folder($new_dir,$new_json);
                }
            }
        }
        return $new_json;
    }
    public static function list_all_file($dir,&$new_json = [])
    {
        $ffs = scandir($dir);
        foreach ($ffs as $i => $ff) {
            if ($ff != '.' && $ff != '..')  {
                $new_dir = $dir.'/'.$ff;
                if(Str::of($new_dir)->contains('.php'))
                {
                    $new_json[] = [
                                Str::after($new_dir, $dir),
                                $dir.'/'.$new_dir,
                    ];
                }
                if(is_dir($new_dir))
                {
                    self::list_all_file($new_dir,$new_json);
                }
            }
        }
        return $new_json;
    }
}