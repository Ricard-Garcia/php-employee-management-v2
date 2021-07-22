<?php

class GeneralController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        //Add session helper
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

    function newEmployee()
    {
        // Load empty form
        $this->view->render("employee/index");
    }

    function createEmployee()
    {
        echo "<p>CREATE EMPLOYEE</p>";
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
