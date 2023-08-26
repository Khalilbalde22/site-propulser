<?php

namespace App\Apropos;

use Illuminate\Support\ServiceProvider;

class ApropoServiceProvider extends ServiceProvider
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
        $this->loadViewsFrom(__DIR__.'/views', 'Apropos');
    }
}
