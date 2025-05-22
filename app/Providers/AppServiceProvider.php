<?php

namespace App\Providers;

use Flasher\Prime\Container\FlasherContainer;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Initialize Flasher Container with Laravel's container
        FlasherContainer::from($this->app);
    }
}
