<?php

class ErrorController extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->message = "";
        // echo "<p>Loaded ErrorController</p>";
    }

    function render()
    {
        $this->view->render('error/index');
    }
}
