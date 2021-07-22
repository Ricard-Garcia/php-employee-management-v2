<?php

class EmployeesModel extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    function getEmployees()
    {
        // echo "<p>GET ALL EMPLOYEES MODEL</p>";
        $query = $this->database->connect()->query("SELECT * FROM employees;")->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($query);
    }

    function getById($id)
    {
        // echo "<p>GET BY ID MODEL</p>";
        $query = $this->database->connect()->query("SELECT * FROM employees WHERE emp_no = $id;")->fetch(PDO::FETCH_ASSOC);
        return $query;
    }

    function createEmployee($data)
    {
        // echo "<p>CREATE EMPLOYEE</p>";
    }

    function updateEmployee()
    {
        echo "<p>UPDATE EMPLOYEE MODEL</p>";
    }

    function deleteEmployee($id)
    {
        // echo "<p>DELETE EMPLOYEE MODEL</p>";
        $query = $this->database->connect()->query("DELETE FROM employees WHERE emp_no = $id;")->fetch();
        return json_encode($query);
    }
}
