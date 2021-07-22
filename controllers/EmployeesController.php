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
        // $this->getEmployees();
        $this->view->render("dashboard/index");
    }

    // // ??????
    // function dbResponse()
    // {
    //     $employees = $this->model->getEmployees();

    //     if ($employees) {
    //         header("Content-Type: application/json");
    //         http_response_code(200);
    //         echo $employees;
    //     } else {
    //         http_response_code(400);
    //         $error = new ErrorController();
    //     }
    // }
    // // ??????

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
        echo "<p>GET BY ID</p>";
        $this->view->render("employee/index");
    }

    function newEmployee()
    {
        // Load empty form
        if ($this->isAjax()) {
            header("Content-Type: application/json");
            http_response_code(200);
            echo "AJAX!";
        } else {
            echo "Navigation!";
            $this->view->render("employee/index");
        }
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
