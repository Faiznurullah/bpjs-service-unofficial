<?php
 
namespace Faiznurullah\Bpjs;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;

class GeminiServiceProvider extends ServiceProvider
{

    public function boot()
    {
          
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . './config/config.php', 'BpjsService');

        $this->app->singleton('BpjsService', function () {
            return new Bpjs(Config::get('BpjsService.Consumer_ID'));
        });
    }
}