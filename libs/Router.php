<?php
require_once(CONTROLLERS . "ErrorController.php");
require_once(CONTROLLERS . "MainController.php");

class Router
{
    function __construct()
    {
        echo "<p>Router Loaded</p>";

        if (isset($_GET['url'])) {
            $url = $_GET['url'];
            $url = rtrim($url, '/');
            $url = explode('/', $url);

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
        } else {
            $controller = new MainController();
        }
    }
}
