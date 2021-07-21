<?php

class View
{

    function __construct()
    {
        echo "<p>Loaded Base View class </p>";
    }

    public function render($viewName)
    {
        require VIEWS . "$viewName" . ".php";
    }
}
