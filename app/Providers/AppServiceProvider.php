<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('locale_option', [
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
        Schema::defaultStringLength(191);
        //
    }
}
