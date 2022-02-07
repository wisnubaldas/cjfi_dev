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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (View::exists('cargo.layout.menu')) {
            ViewTrait::cargo();
        }

        ViewTrait::locale_option();
        ViewTrait::breadcrum();
        Schema::defaultStringLength(191);
        //
    }
}
