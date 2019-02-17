<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Color;
use App\Size;
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
        if(!\App::runningInConsole()){
            // View::share('categories', Category::all());
            View::share('colortable', Color::all());
            View::share('sizes', Size::all());

        }
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
