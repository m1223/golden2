<?php

namespace App\Providers;

use App\border;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);


        view()->composer('*', function ($view) {
            $c=border::onlyTrashed()->count();
            $view->with('border',$c);
        });
//        view()->composer('*', function ($view) {
//            $border=border::latest()->get();
//            $view->with('borders',$border);
//        });
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
