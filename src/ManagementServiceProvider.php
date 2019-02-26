<?php

namespace Webstarters\Platform;

use Illuminate\Support\ServiceProvider;

class ManagementServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/jw-platform.php' => config_path('jw-platform.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/jw-platform.php', 'jw-platform');
    }
}


