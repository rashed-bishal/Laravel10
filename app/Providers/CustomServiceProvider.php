<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\CustomService;


class CustomServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('custom-facade', function(){
            return new CustomService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
