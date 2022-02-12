<?php
namespace App\Traits;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;
// backen Menu
trait MenuTrait 
{
    public static function data()
    {
        // $routes = collect(\Route::getRoutes())->map(function ($route) { return $route->uri(); });
        // dump($route);

        return [
            'menu' => [
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
            ]
        ];
    }
}