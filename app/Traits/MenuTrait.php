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

                    	'icon' => 'fa fa-hdd',
                    	'title' => 'Email',
                    	'url' => 'javascript:;',
                    	'badge' => '10',
                    	'sub_menu' => [[
                    		'url' => '/email/inbox',
                    		'title' => 'Inbox'
                    	],[
                    		'url' => '/email/compose',
                    		'title' => 'Compose'
                    	],[
                    		'url' => '/email/detail',
                    		'title' => 'Detail'
                    	]]
                    ],
            ]
        ];
    }
}