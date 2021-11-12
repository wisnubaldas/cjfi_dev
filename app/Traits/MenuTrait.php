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
                    'icon' => 'ion-ios-car bg-gradient-purple',
                    'title' => 'Status Panel',
                    'url' => '/home/status-panel'
                ],
                // [
                //     'icon' => 'ion-ios-car bg-gradient-blue',
                //     'title' => 'Status Boking',
                //     'url' => '/home/status-boking'
                // ],
            ]
        ];
    }
}