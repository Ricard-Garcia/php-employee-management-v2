<?php
require_once(CONTROLLERS . "ErrorController.php");
class Router
{
    public function __construct()
    {

        $url = isset($_GET["url"]) ? $_GET["url"] : null;
        $url = rtrim($url, "/");
        $url = explode("/", $url);

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

                // Look for methods
                $urlLength =  count($url);
                // If there's only method
                if ($urlLength == 1) {
                    $controller->defaultMethod();
                } elseif ($urlLength > 1) {
                    if ($urlLength > 2) {
                        $param = $url[2];
                        // Call method with given param
                        $controller->{$url[1]}($param);
                    } else {
                        // Just load the method
                        $controller->{$url[1]}();
                    }
                }
                // If no method, just render the view
                else {
                    $controller->render();
                }
            } else {
                // Add specific message
                if (session_status() == PHP_SESSION_NONE) {
                    header('Location:' . BASE_URL . '/login/');
                } else {
                    header('Location:' . BASE_URL . '/employees/');
                }
            }
        }
        // Load the default controller
        else {
            if (session_status() == PHP_SESSION_NONE) {
                header('Location:' . BASE_URL . '/login/');
            } else {
                header('Location:' . BASE_URL . '/employees/');
            }
        }

        // echo "These are all headers: ";
        // echo "<pre>";
        // print_r(getAllHeaders());
        // echo "</pre>";
    }
}
