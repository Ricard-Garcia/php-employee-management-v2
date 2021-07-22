<?php

class ErrorController extends Controller
{
    function __construct()
    {
        parent::__construct();
        echo "<p>Loaded ErrorController</p>";
        $this->view->render('error/index');
        // $this->view->message = "CONTROLLER OR MODEL NOT FOUND";
    }
}
