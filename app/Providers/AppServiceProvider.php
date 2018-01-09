<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//Use Shema if get error in terminal for lenght
// use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Use Shema if get error in terminal for lenght
//        Schema::defaultStringLenght(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
