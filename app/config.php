<?php

spl_autoload_register(function ($class) {
    if (file_exists('classes/' . $class . '.php')) {
        include_once 'classes/' . $class . '.php';
    } elseif (file_exists('app/' . $class . '.php')) {
        include_once 'app/' . $class . '.php';
    } elseif (file_exists('controllers/' . $class . '.php')) {
        include_once 'controllers/' . $class . '.php';
    } elseif (file_exists('views/' . $class . '.php')) {
        include_once 'views/' . $class . '.php';
    } elseif (file_exists('models' . $class . '.php')) {
        include_once 'models/' . $class . '.php';
    } else {
        die('Class ' . $class . ' not found!');
    }
});

$app = new Bootstrap();
$route = new Route($app->routes);
