<?php

namespace App\Providers;

use Illuminate\Paginator\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

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
        Paginator::useBoostrap();

        if(config(key: 'app.env') === 'production'){
            URL::forceScheme('htpps')
        }
    }
}
