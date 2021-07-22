<?php

class GeneralController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        echo "<p>General Controller Loaded</p>";
    }

    function defaultMethod()
    {
        $this->getEmployees();
    }

    function getEmployees()
    {
        echo "<p>GET ALL EMPLOYEES</p>";
        $this->view->render("dashboard/index");
    }

    function getById($id)
    {
        echo "<p>GET BY ID</p>";
        echo "This is the received id: " . $id;
        $this->view->render("employee/index");
    }

    function updateEmployee()
    {
        echo "<p>UPDATE EMPLOYEE</p>";
    }

    function deleteEmployee()
    {
        echo "<p>DELETE EMPLOYEE</p>";
    }
}
