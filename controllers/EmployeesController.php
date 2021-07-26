<?php

class EmployeesController extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    function isAjax()
    {
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            return true;
        } else {
            return false;
        }
    }

    function defaultMethod()
    {
        $session = $this->sessionController->checkSession();

        if ($session) {
            $this->view->render("dashboard/index");
        } else {
            $this->view->render("login/index");
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
            $this->view->render("dashboard/index");
        }
    }

    function getById($id)
    {
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
        if ($this->isAjax()) {
            $this->model->createEmployee($_POST);
            http_response_code(200);
        } else {
            header("Location:" . BASE_URL . "/employees/");
            $this->view->render("dashboard/index");
        }
    }

    function updateEmployee()
    {
        $this->model->updateEmployee($_POST);

        // Reload view with updated data
        $employee = $this->model->getById($_POST["emp_no"]);
        $this->view->employee = $employee;
        $this->view->render("employee/index");
    }

    function deleteEmployee($id)
    {
        $this->model->deleteEmployee($id);
    }
}
