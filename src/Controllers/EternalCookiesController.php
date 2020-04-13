<?php
namespace EvolutionCMS\ZeeyN\EternalCookies\Controllers;

use EvolutionCMS;

class EternalCookiesController
{
    private $evo;
    private $window;
    private $styles;
    private $scripts;

    function __construct()
    {
        $this->evo = EvolutionCMS();
    }

    function __clone()
    {}

    public function renderWindow():string
    {
        return $this->window;
    }

    public function getScripts():string
    {
        return $this->scripts;
    }

    public function getStyles():string
    {
        return $this->styles;
    }

    private function prepareStyles()
    {
        $this->styles = 'styles';
    }

    private function prepareScripts()
    {
        $this->scripts = 'scripts';
    }

    private function prepareWindow()
    {
        $this->window = 'window';
    }

    public function isAccepted()
    {
        //todo Проверка включенности пакета
        return true;
    }

    public function makeAlive()
    {
        //todo Полный рендер всего
        $this->prepareWindow();
        $this->prepareStyles();
        $this->prepareScripts();



    }





    //TODO Обработку конфигураций из модели SiteModule
    //TODO Сборку окна печенек
    //TODO Обработку ajax запроса

}




