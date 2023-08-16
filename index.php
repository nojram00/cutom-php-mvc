<?php

$requestUri = $_SERVER['REQUEST_URI'];

$routes = [
    '/' => 'HomeController@index',
    '/hello' => 'SampleController@index',
    '/employee' => 'EmployeeController@index',
];

$routeParts = explode('@', $routes[$requestUri]);
$controllerName = $routeParts[0];
$actionName = $routeParts[1];

require_once __DIR__."/Controller/$controllerName.php";


$controller = new $controllerName();

$controller->$actionName();

// require_once '/GitHub/phpCustom/Controller/EmployeeController.php';

// $controller = new EmployeeController();
// $controller->index();
