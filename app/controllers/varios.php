<?php
//error_reporting(E_ERROR | E_WARNING | E_PARSE);

use Jenssegers\Blade\Blade;

require (__DIR__.'/../ctrl.php');

include (VENDOR_FOLDER.'autoload.php');

$blade = new Blade(VIEWS_FOLDER, CACHE_FOLDER);