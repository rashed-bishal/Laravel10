<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\CardService;

class PaymentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(CardService::class, function(){
            return new CardService('3-fbE7Fh!ZTZ9(M};9{ahxY@5;]W~G03#m=w}7[+E0BiO4qNNi');
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
