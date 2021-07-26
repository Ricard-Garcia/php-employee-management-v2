<?php

class View
{

    public function render($viewName)
    {
        require VIEWS . "$viewName" . ".php";
    }
}
