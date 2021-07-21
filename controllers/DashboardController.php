<?php

class DashboardController extends Controller
{

    function __construct()
    {
        echo "<p>DashboardController loaded</p>";

        parent::__construct();
        $this->view->render("dashboard/index");
    }
}
