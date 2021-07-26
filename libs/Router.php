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
                $controllerName = $firstParam . "Controller";
                $controller = new $controllerName();
                $controller->loadModel($firstParam);

                $urlLength =  count($url);
                if ($urlLength == 1) {
                    $controller->defaultMethod();
                } elseif ($urlLength > 1) {
                    if (method_exists($controller, $url[1])) {
                        if ($urlLength > 2) {
                            $param = $url[2];
                            $controller->{$url[1]}($param);
                        } else {
                            $controller->{$url[1]}();
                        }
                    } else {
                        if ($url[0] == "employees") {
                            header('Location:' . BASE_URL . '/employees/');
                        } else {
                            header('Location:' . BASE_URL . '/login/');
                        }
                    }
                }
                // If no method, just render the view
                else {
                    $controller->render();
                }
            } else {
                // Error controling
                if ($url[0] == "employees") {
                    header('Location:' . BASE_URL . '/employees/');
                } else {
                    header('Location:' . BASE_URL . '/login/');
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
    }
}
