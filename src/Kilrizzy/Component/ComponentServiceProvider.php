<?php

namespace Kilrizzy\Component;

use Illuminate\Support\ServiceProvider;
use Kilrizzy\Component\Component;

class ComponentServiceProvider extends ServiceProvider
{
    //protected $defer = true; //Only load when needed

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Kilrizzy\Component\Contracts\ComponentContract',
            'Kilrizzy\Component\Component'
        );
    }

}
