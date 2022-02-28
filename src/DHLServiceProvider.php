<?php

namespace dex\dhl;

use Illuminate\Support\ServiceProvider;

class DHLServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/dhl.php', "dhl");
        $this->registerFacade();
        $this->publishes([
            __DIR__, '/config/dhl.php' => config_path("dhl.php")
        ]);
    }

    public function register()
    {
    }

    protected function registerFacade(){
        $this->app->singleton("DHL", function ($app) {
            return new DHL();
        });
    }

}
