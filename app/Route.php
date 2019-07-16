<?php

class Route
{
    private static $validRoutes = array();
    function __construct(array $routes)
    {
        self::$validRoutes = $routes;
    }

    public static function set($route, $method)
    {
        if ($route == self::$validRoutes[1]) {
            $method();
        }
    }
}
