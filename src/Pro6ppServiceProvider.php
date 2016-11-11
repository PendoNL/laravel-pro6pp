<?php

namespace PendoNL\LaravelPro6pp;

use Illuminate\Support\ServiceProvider;

/**
 * Class LaravelPro6ppServiceProvider.
 */
class LaravelPro6ppServiceProvider extends ServiceProvider
{
    /**
     * Publishes the config file.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/laravel-pro6pp.php' => config_path('laravel-pro6pp.php'),
        ], 'config');

        $this->mergeConfigFrom(__DIR__.'/../config/laravel-pro6pp.php', 'laravel-pro6pp');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('laravel-pro6pp', function() {
            return new \PendoNL\Pro6pp\Pro6pp(
                config('laravel-pro6pp.api_key'),
                config('laravel-pro6pp.api_format'),
                config('laravel-pro6pp.pretty_results')
            );
        });
    }
}
