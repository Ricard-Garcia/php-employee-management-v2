<?php

class Controller
{

    function __construct()
    {
        // echo "<p>Loaded Base Controller class </p>";
        $this->view = new View();
        $this->sessionController = new SessionController();
    }

    function loadModel($rawModelName)
    {
        $ucModel = ucfirst($rawModelName);

        $modelPath = MODELS . $ucModel . "Model.php";
        if (file_exists($modelPath)) {
            // Require path to model
            require $modelPath;
            // Defining the final name
            $modelName = $ucModel . "Model";
            // Instancing the required model
            $this->model = new $modelName();
        } else {
            // Add specific message
            $controller = new ErrorController();
            $controller->view->message = "Not valid model";
            $controller->render();
        }
    }
}
