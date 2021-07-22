<?php

class EmployeesController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        //Add session helper
    }

    function isAjax()
    {
        if (!getAllHeaders()["Sec-Fetch-Mode"] = "navigate") {
            return true;
        } else {
            return false;
        }
    }

    function defaultMethod()
    {
        $this->view->render("dashboard/index");
    }

    function getEmployees()
    {
        $employees = $this->model->getEmployees();

        // echo "AJAX!";
        header("Content-Type: application/json");
        http_response_code(200);
        echo $employees;
    }

    function getById($id)
    {
        // echo "<p>GET BY ID</p>";
        $employee = $this->model->getById($id);

        $this->view->employee = $employee;
        $this->view->render("employee/index");
    }

    function newEmployee()
    {
        // Load empty form
        $this->view->render("employee/index");
    }

    function createEmployee()
    {
        // echo "<p>CREATE EMPLOYEE</p>";
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    }

    function updateEmployee()
    {
        // echo "<p>UPDATE EMPLOYEE</p>";
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    }

    function deleteEmployee()
    {
        echo "<p>DELETE EMPLOYEE</p>";
    }
}
