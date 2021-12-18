<?php

namespace ArnobMonir\AamarPay;

use Illuminate\Support\ServiceProvider;

class AamarPayServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/config/config.php' => config_path('aamarpay.php'),
            ], 'config');
        }
    }
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/config.php', 'aamarpay');
    }
}
