<?php

require_once 'connection.php';

if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
    if (isset($_GET['method'])) {
        $method = $_GET['method'];
    } else {
        $method = 'index';
    }
} else {
    $controller = 'pages';
    $method = 'home';
}

require_once 'routes.php';
