<?php
namespace EvolutionCMS\ZeeyN\EternalCookies;

use EvolutionCMS;
use EvolutionCMS\ServiceProvider;
use EvolutionCMS\ZeeyN\EternalCookies\Controllers\EternalCookiesController;
use Illuminate\Support\Facades\Blade;

class EternalCookiesServiceProvider extends ServiceProvider
{
    protected $evo;
    protected $ec;

    public function register()
    {
        $this->evo = EvolutionCMS();
        $this->evo->regClientCSS('<style>TEST</style>');
        $this->evo->regClientScript('<script>console.log("I\'m here")</script>');
        $this->evo->regClientHTMLBlock('<div>TESTING</div>');
        $this->ec = new EternalCookiesController();
        $this->app->registerModule(
            'EternalCookies',
            dirname(__DIR__) . '/modules/ec.module.php'
        );
        if($this->ec->isAccepted())
        {
            $this->ec->makeAlive();
        }
    }
}