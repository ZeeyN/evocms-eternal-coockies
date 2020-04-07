<?php
namespace EvolutionCMS\ZeeyN\EternalCookies;

use EvolutionCMS;
use EvolutionCMS\ServiceProvider;
use EvolutionCMS\ZeeyN\EternalCookies\Controllers\EternalCookiesController;

class EternalCookiesServiceProvider extends ServiceProvider
{
    protected $evo;

    public function register()
    {
        $this->evo = EvolutionCMS();
        $this->app->registerModule(
                'EternalCookies',
                dirname(__DIR__) . '/modules/config_module/ec.module.php'
        );
        $this->evo->addDataToView([
                'EternalCookies' => new EternalCookiesController()
                                  ]);
    }
}