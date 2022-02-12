<?php
namespace App\Traits;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
trait ViewTrait
{
    public static function back_menu()
    {
        // dump(\Auth::check());
        return View::share('back_menu', [
                [
                    'icon' => 'ion-ios-home bg-gradient-green',
                    'title' => 'Home',
                    'label' => 'Dashboard',
                    'url' => '/home'
                ],
                [
                    'icon' => 'ion-ios-airplane bg-indigo',
                    'title' => 'Flights',
                    'url' => '/',
                ],
                [
                    'icon' => 'fab fa-simplybuilt bg-gradient-aqua',
                    'title' => 'Brand',
                    'url' => 'javascript:;',
                    'caret' => true,
                    'sub_menu' => [[
                        'url' => '/brand',
                        'title' => 'Data Grid'
                    ],
                    [
                        'url' => '/brand/create',
                        'title' => 'Create'
                    ]]
                ],
                    [
                        'icon' => 'fas fa-cookie-bite bg-gradient-green',
                        'title' => 'Product',
                        'url' => 'javascript:;',
                        'caret' => true,
                        'sub_menu' => [[
                            'url' => '/product',
                            'title' => 'Data Grid'
                        ],
                        [
                            'url' => '/product/create',
                            'title' => 'Create Product'
                        ],[
                            'url' => '/product-image/create',
                            'title' => 'Create Image'
                        ]]
                    ]
        ]);
    }
    public static function cargo()
    {
        return View::share('cargo_menu', [
            [
                'name'=>'Home',
                'url'=>'/',
                'status'=>'active',
            ],
            [
                'name'=>'Flight',
                'url'=>'#',
                'status'=>'#',
                'sub-menu'=>[
                    [
                        'name'=>'flight schedule',
                        'status'=>'',
                        'url'=>'/cargo/flight-scheduled',

                    ],
                    [
                        'name'=>'Track Your Air Cargo Shipments',
                        'status'=>'#',
                        'url'=>'#',

                    ]
                ]
            ],
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
