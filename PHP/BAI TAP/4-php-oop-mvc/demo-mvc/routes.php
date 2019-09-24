<?php

$controllers = [
    'pages' => ['home', 'errors'],
    'posts' => ['index', 'showPost'],
];

if (!array_key_exists($controller, $controllers) || !in_array($method, $controllers[$controller])) {
    $controller = 'pages';
    $method = 'error';
}
include_once 'controllers/' . ucwords($controller) . 'Controller.php';

$nameOfClass = ucwords($controller) . 'Controller';

$controller = new $nameOfClass;
$controller->$method();
