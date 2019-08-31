<?php

spl_autoload_register(function ($class) {
    if (file_exists('Classes/' . $class . '.php')) {
        include_once 'Classes/' . $class . '.php';
    } elseif (file_exists('app/' . $class . '.php')) {
        include_once 'app/' . $class . '.php';
    } elseif (file_exists('Controllers/' . $class . '.php')) {
        include_once 'Controllers/' . $class . '.php';
    } elseif (file_exists('Views/' . $class . '.php')) {
        include_once 'Views/' . $class . '.php';
    } elseif (file_exists('Models' . $class . '.php')) {
        include_once 'Models/' . $class . '.php';
    } else {
        die('Class ' . $class . ' not found!');
    }
});

$app = new Bootstrap();
$route = new Route($app->route);
