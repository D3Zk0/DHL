<?php

namespace dex\dhl;

use Illuminate\Support\ServiceProvider;

class DHLServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/dhl.php', "dhl");
        $this->publishes([
            __DIR__, '/config/dhl.php' => config_path("dhl.php")
        ]);
    }

    public function register()
    {

    }

}
