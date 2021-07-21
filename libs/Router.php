<?php
require_once(CONTROLLERS . "ErrorController.php");

class Router
{
    function __construct()
    {
        echo "<p>Router</p>";

        $url = $_GET['url'];
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        //print_r($url);

        $pathController = CONTROLLERS . $url[0] . '.php';

        if (file_exists($pathController)) {
            require_once $pathController;
            $controller = new $url[0];

            if (isset($url[1])) {
                $controller->{$url[1]}();
            }
        } else {
            $controller = new ErrorController();
        }
    }
}
