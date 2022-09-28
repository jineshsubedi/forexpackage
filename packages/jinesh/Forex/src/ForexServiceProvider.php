<?php

namespace Jinesh\Forex;

use Illuminate\Support\ServiceProvider;

class ForexServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Jinesh\Forex\ForexController');
        $this->loadViewsFrom(__DIR__.'/views', 'forex');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }
}
