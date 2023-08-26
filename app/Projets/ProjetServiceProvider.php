<?php

namespace App\Projets;

use Illuminate\Support\ServiceProvider;

class ProjetServiceProvider extends ServiceProvider
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
        $this->loadViewsFrom(__DIR__.'/views','Projets');
    }
}
