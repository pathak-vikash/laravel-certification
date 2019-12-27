<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('components.alert', 'alert');

        # view share
        View::share("copyright", ['author'=> "Vikash Pathak", "year" => date('Y')]);

        # view Creator
        View::creator('welcome', function(){
            \Log::info("Hello from view creator");
        });

        # view composer
        View::composer('welcome', function(){
            \Log::info("Hello from the view composer");
        });
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
