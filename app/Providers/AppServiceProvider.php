<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Traits\ViewTrait;
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
        ViewTrait::locale_option();
        ViewTrait::breadcrum();
        Schema::defaultStringLength(191);
        //
    }
}
