<?php
session_save_path('session');

    // Yêu cầu Web Server tạo file Session để lưu trữ giá trị tương ứng với CLIENT (Web Browser đang gởi Request)
    session_start(array(
        'cache_limiter' => 'private',
        'read_and_close' => true,
    ));


require_once('connection.php');
require_once('routes.php');
require_once('config.php');
require_once('libs/functions.php');
require_once('libs/Route.php');
require_once('libs/Session.php');
require_once('libs/Auth.php');

$route = new Route();
$currentRoute = $route->getCurrentRoute();

if(!$currentRoute){
  var_dump("404 Not Found");
  die();
}

$pathController = $currentRoute['use'];
$action     = $currentRoute['action'];

$classController = explode('/',$pathController);
$classController = end($classController);

require_once('Controllers/' . $pathController . '.php');

$controller = new $classController;
$controller->$action();
