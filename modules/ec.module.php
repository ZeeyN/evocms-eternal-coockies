<?php
use Illuminate\Filesystem\Filesystem;
use Illuminate\View\FileViewFinder;
use \Illuminate\Support\Facades\View;




$filesystem = new Filesystem();
$viewFinder = new FileViewFinder($filesystem, [EVO_CORE_PATH . 'vendor/zeeyn/evocms-eternal-cookies/modules/view/']);
View::setFinder($viewFinder);



echo (string)View::make('ec.interface.blade.php');
//$template = file_get_contents(dirname(__FILE__) . '/ec.interface.tpl')
//echo $template;