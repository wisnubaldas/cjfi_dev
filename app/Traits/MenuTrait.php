<?php
namespace App\Traits;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

trait MenuTrait 
{
    public static function data()
    {
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
                    'url' => '/flights',
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