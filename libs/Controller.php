<?php

class Controller
{

    function __construct()
    {
        // echo "<p>Loaded Base Controller class </p>";
        $this->view = new View();
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

            // TEST PRINT
            // print_r($this->model);
        } else {
            // Add specific message
            $controller = new ErrorController();
        }
    }
}
