<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Traits\ViewTrait;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    // use ViewTrait;
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // if (!defined('PREFIX')) {
        //     define("PREFIX", Str::kebab(Str::random(50)));
        // }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        ViewTrait::locale_option();
        ViewTrait::breadcrum();
        Schema::defaultStringLength(191);
        //
    }
}
