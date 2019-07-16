<?php
class Bootstrap
{
    public $routes = array();
    public function __construct()
    {
        $request = trim($_SERVER['REQUEST_URI'], '/');
        $url = explode('/', $request);
        if (count($url) <= 1) {
            $url[1] = 'index';
        } elseif ($url[1] == 'index.php') {
            $url[1] = 'index';
        }
        $this->routes = $url;
    }
}
