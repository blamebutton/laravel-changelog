<?php

namespace BlameButton\Laravel\Changelog;

use Illuminate\Support\ServiceProvider;

class ChangelogServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/changelog.php' => config_path('changelog.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register(): void
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/changelog.php', 'changelog');

        // Register the main class to use with the facade
        $this->app->singleton('changelog', function () {
            return new Changelog;
        });
    }
}
