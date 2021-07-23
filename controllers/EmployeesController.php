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
        // if (!getAllHeaders()["Sec-Fetch-Mode"] = "navigate") {
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            return true;
        } else {
            return false;
        }
    }

    function defaultMethod()
    {

        if ($this->isAjax()) {
            echo "AJAX!";
        } else {
            // echo "NOT AJAX!";
            $this->view->render("dashboard/index");
        }
    }

    function getEmployees()
    {
        $employees = $this->model->getEmployees();
        if ($this->isAjax()) {
            header("Content-Type: application/json");
            http_response_code(200);
            echo $employees;
        } else {
            // echo "NOT AJAX!";
            $this->view->render("dashboard/index");
        }
    }

    function getById($id)
    {
        // echo "<p>GET BY ID</p>";
        $employee = $this->model->getById($id);

        // Load populated form
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
        $this->model->updateEmployee($_POST);
    }

    function deleteEmployee()
    {
        echo "<p>DELETE EMPLOYEE</p>";
    }
}