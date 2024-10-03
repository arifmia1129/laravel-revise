<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Route::pattern('id','[0-9]+');
    }
}
