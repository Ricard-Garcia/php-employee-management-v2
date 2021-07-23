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

    function updateEmployee($data)
    {
        echo "<p>UPDATE EMPLOYEE MODEL</p>";
        echo "<pre>";
        print_r($data);
        echo "</pre>";

        $firstName = $data["first_name"];
        $lastName = $data["last_name"];
        $email = $data["email"];
        $gender = $data["gender"];
        $city = $data["city"];
        $streetAddress = $data["streetAddress"];
        $state = $data["state"];
        $age = $data["age"];
        $postalCode = $data["postal_code"];
        $phoneNumber = $data["phone_number"];

        $query = $this->database->connect()->query()->fetch(PDO::FETCH_ASSOC);

        //TODO add query to database
    }

    function deleteEmployee($id)
    {
        // echo "<p>DELETE EMPLOYEE MODEL</p>";
        $query = $this->database->connect()->query("DELETE FROM employees WHERE emp_no = $id;")->fetch();
        return json_encode($query);
    }
}
