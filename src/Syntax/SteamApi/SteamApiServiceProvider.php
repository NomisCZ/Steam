<?php

namespace Syntax\SteamApi;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class SteamApiServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('steam-api', function () {
            return new Client;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return string[]
     */
    public function provides()
    {
        return ['steam-api'];
    }
}
