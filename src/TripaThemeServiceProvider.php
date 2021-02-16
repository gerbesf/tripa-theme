<?php

namespace Gerbesf\TripaTheme;

use Illuminate\Support\ServiceProvider;

class TripaThemeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'tripa-theme');
         $this->loadViewsFrom(__DIR__.'/../resources/views', 'tripa-theme');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
         $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('tripa-theme.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/tripa-theme'),
            ], 'views');*/

            // Publishing assets.
            $this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/tripa-theme'),
            ], 'assets');

            $this->publishes([
                __DIR__.'/../resources/kickstart' => resource_path('views/kickstart-example'),
            ], 'assets');

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/tripa-theme'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'tripa-theme');

        // Register the main class to use with the facade
        $this->app->singleton('tripa-theme', function () {
            return new TripaTheme;
        });
    }
}
