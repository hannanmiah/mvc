<?php

class Route
{
    public static $validRoutes = array();
    private static $reqRoute = array();
    function __construct(array $route)
    {
        self::$reqRoute = $route;
    }

    public static function get($route, $method)
    {
        self::$validRoutes[] = $route;
        if ($route == self::$reqRoute[1]) {
            if (is_callable($method)) {
                $method();
            } elseif (is_string($method)) {
                $arg = explode('@', $method);
                if (!class_exists($arg[0])) {
                    echo "Class {$arg[0]} not found!";
                } elseif (!method_exists($arg[0], $arg[1])) {
                    echo "Function {$arg[1]} doesn't exist!";
                } else {
                    $arg[0]::{$arg[1]}();
                }
            }
        }
    }

    function __destruct()
    {
        if (!in_array(self::$reqRoute[1], self::$validRoutes)) {
            echo "<h1>Sorry! The requsted page wasn't found!</h1>";
        }
    }
}
