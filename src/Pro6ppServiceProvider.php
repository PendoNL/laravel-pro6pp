<?php

namespace PendoNL\LaravelPro6pp;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

/**
 * Class LaravelFontAwesomeServiceProvider.
 */
class LaravelPro6ppServiceProvider extends ServiceProvider
{
    /**
     * Boot method registers the blade directive.
     * Usage; @fa('list', ['attributes' => 'go here']).
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
        $this->app->singleton('laravel-pro6pp', function($app) {
            return new \PendoNL\Pro6pp\Pro6pp(
                config('laravel-pro6pp.api_key'),
                config('laravel-pro6pp.api_format'),
                config('laravel-pro6pp.pretty_results')
            );
        });
    }
}
