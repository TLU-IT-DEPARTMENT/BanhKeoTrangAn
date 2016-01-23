<?php

define('DS', DIRECTORY_SEPARATOR); // dau ' / '
define('ROOT', dirname(dirname(__FILE__))); // thu muc cha
define('VIEWS_PATH', ROOT . DS . 'views');
define('WEBROOT_PATH', 'http://localhost:8080/BanhKeoTrangAn/webroot');

//$uri = $_SERVER['REQUEST_URI'];
//print_r($uri);

require_once (ROOT . DS . 'lib' . DS . 'init.php');

$router = new Router($_SERVER['REQUEST_URI']);

//echo "<pre>";
//print_r('Route: '.$router->getRoute().PHP_EOL);
//print_r('Language: '.$router->getLanguage().PHP_EOL);
//print_r('Controller: '.$router->getController().PHP_EOL);
//print_r('Action to be called: '.$router->getMethod_prefix().$router->getAction().PHP_EOL);
//echo"Params: ";
//print_r($router->getParams());

session_start();

App::run($_SERVER['REQUEST_URI']);

