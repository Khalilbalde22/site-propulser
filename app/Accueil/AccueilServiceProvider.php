<?php

namespace App\Accueil;

use Illuminate\Support\ServiceProvider;

class AccueilServiceProvider extends ServiceProvider
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
        $this->loadViewsFrom(__DIR__.'/views', 'Accueil');
    }
}
