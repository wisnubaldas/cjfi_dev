<?php
namespace App\Traits;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
trait ViewTrait
{
    public static function cargo()
    {
        return View::share('cargo_menu', [
            [
                'name'=>'Indonesia',
                'url'=>'#',
                'status'=>'active',
                'sub-menu'=>[
                    [
                        'name'=>'Satu',
                        'code'=>'en',
                        'status'=>'#',
                        'url'=>'#',

                    ],
                    [
                        'name'=>'Dua',
                        'code'=>'en',
                        'status'=>'#',
                        'url'=>'#',

                    ]
                ]
            ],
            [
                'name'=>'single',
                'code'=>'en',
                'status'=>'#',
                'url'=>'#',
                'sub-menu'=>[
                    [
                        'name'=>'m1',
                        'code'=>'en',
                        'status'=>'#',
                        'url'=>'#',
                        'sub-menu'=>[
                            [
                                'name'=>'m11',
                                'code'=>'en',
                                'status'=>'#',
                                'url'=>'#',
                                'sub-menu'=>[
                                    [
                                        'name'=>'m111',
                                        'code'=>'en',
                                        'status'=>'#',
                                        'url'=>'#',
                                    ],
                                    [
                                        'name'=>'m112',
                                        'code'=>'en',
                                        'status'=>'#',
                                        'url'=>'#',
                                    ]
                                ]
                            ]
                        ]

                    ],
                    [
                        'name'=>'m2',
                        'code'=>'en',
                        'status'=>'#',
                        'url'=>'#',
                    ]
                ]
            ]
        ]);
    }
    public static function locale_option()
    {
        return View::share('locale_option', [
            [
                'image'=>'flag-indonesia.png',
                'name'=>'Indonesia',
                'code'=>'id'
            ],
            [
                'image'=>'flag-english.png',
                'name'=>'United States',
                'code'=>'en'
            ],
            [
                'image'=>'flag-chinese.png',
                'name'=>'Chinese',
                'code'=>'zh_CN'
            ]
        ]);
    }
    public static function breadcrum()
    {
        $result = [];
        $uri = URL::current();
        $slice = Str::after($uri, '//');
        $slice = explode('/',$slice);
        unset($slice[0]);
        $slice = array_values($slice);
        for ($i=0; $i < count($slice); $i++) { 
                $xuri = Str::of($uri)->before($slice[$i]);
                array_push($result,[
                    'name'=>Str::title($slice[$i]),
                    'link'=>$xuri.$slice[$i]
                ]);
        }
        return View::share('breadchrum',$result);
    }
}
