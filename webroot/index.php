<?php

define('DS', DIRECTORY_SEPARATOR); // dau ' / '
define('ROOT', dirname(dirname(__FILE__))); // thu muc cha
define('VIEWS_PATH', ROOT . DS . 'views');
define('WEBROOT_PATH', 'http://localhost:8080/BanhKeoTrangAn/webroot');
define('ROOT_PATH','http://localhost:8080/BanhKeoTrangAn/');
define('ADMIN_ROOT','http://localhost:8080/BanhKeoTrangAn/admin');
define('DEFAULT_ROOT','http://localhost:8080/BanhKeoTrangAn/default');
//$uri = $_SERVER['REQUEST_URI'];
//print_r($uri);

require_once (ROOT . DS . 'lib' . DS . 'init.php');

session_start();

App::run($_SERVER['REQUEST_URI']);

