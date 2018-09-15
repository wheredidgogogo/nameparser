<?php

namespace Wheredidgogogo\Nameparser;

use Illuminate\Support\ServiceProvider;

class NameparserServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind('wheredidgogogo-nameparser', function() {
            return new Nameparser;
        });
    }
}
