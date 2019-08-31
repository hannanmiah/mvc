<?php

class Index extends Controller
{
    public function __construct()
    {
        echo "This is index page!<br>";
    }

    public static function index()
    {
        include 'Views/index.php';
    }
}
