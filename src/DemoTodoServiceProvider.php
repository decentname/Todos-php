<?php

namespace Demo\Todo;

use Illuminate\Support\ServiceProvider;

class DemoTodoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        require __DIR__.'/Http/routes.php';
        $this->loadViewsFrom(__DIR__.'/views','demo-todo');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        // include __DIR__.'/Http/routes.php';
        // $this->app->make()
        $this->mergeConfigFrom(__DIR__.'/config/demo-config.php','demo-config');
    }
}
