<?php

define('DS', DIRECTORY_SEPARATOR); // dau ' / '
define('ROOT', dirname(dirname(__FILE__))); // thu muc cha

define('VIEWS_PATH', ROOT . DS . 'views');
define('WEBROOT_PATH', 'http://localhost:8080/BanhKeoTrangAn/webroot');
define('ROOT_PATH', 'http://localhost:8080/BanhKeoTrangAn/');
define('ADMIN_ROOT', 'http://localhost:8080/BanhKeoTrangAn/admin');
define('DEFAULT_ROOT', 'http://localhost:8080/BanhKeoTrangAn/default');
define('INDEX', 'http://localhost:8080/BanhKeoTrangAn/en/index');

define('SLIDEBAR_MENU', dirname(dirname(__FILE__)) . DS . "views\_layout_admin\sidebar_menu.php");
define('LAYOUT_ADMIN', dirname(dirname(__FILE__)) . DS . "views\_layout_admin");

require_once (ROOT . DS . 'lib' . DS . 'init.php');

session_start();
//print_r($_SERVER['REQUEST_URI']);
//die;
App::run($_SERVER['REQUEST_URI']);

