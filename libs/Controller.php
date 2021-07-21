<?php

class Controller
{

    function __construct()
    {
        $this->view = new View();
        echo "<p>Loaded Base Controller class </p>";
    }

    function loadModel()
    {
        echo "<p> Loaded model </p>";
    }
}
