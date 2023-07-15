<?php
use Router\Router;

require './autoload.php';
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Header:*");
$route = new Router();

$route->run();