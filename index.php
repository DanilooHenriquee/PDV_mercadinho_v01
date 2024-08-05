<?php

require_once(dirname(__FILE__) ."/config/autoloader.php");
require_once(dirname(__FILE__) ."/config/router.php");

$loader = new \config\autoloader\Psr4AutoloaderClass;

$loader->register();

$loader->addNamespace("App\\", __DIR__ . '/src');

$router = new \config\router\Router;