<?php
require_once(CONTROLLERS . "ErrorController.php");
// require_once(CONTROLLERS . "MainController.php");
class Router
{
    public function __construct()
    {
        echo "<p>New Router charged</p>";
        $url = isset($_GET["url"]) ? $_GET["url"] : null;
        $url = rtrim($url, "/");
        $url = explode("/", $url);

        // echo "This is the url: " . print_r($url, true);

        $firstParam = ucfirst($url[0]);

        // Load a specific controller
        if (!empty($url[0])) {
            $controllerFile = CONTROLLERS . $firstParam . "Controller.php";
            if (file_exists($controllerFile)) {
                require $controllerFile;
                // Defining the final name
                $controllerName = $firstParam . "Controller";
                // Instancing the required controller
                $controller = new $controllerName();
                // Loading the corresponding model
                $controller->loadModel($firstParam);
            } else {
                // Add specific message
                $controller = new ErrorController();
            }
        }
        // Load the default controller
        else {
            $controllerFile = CONTROLLERS . "IndexController.php";
            require $controllerFile;
            $controller = new IndexController();
            $controller->loadModel("index");
        }
    }
}
