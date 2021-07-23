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
        $query = $this->database->connect()->prepare("SELECT * FROM employees");

        try {
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    function getById($id)
    {
        // echo "<p>GET BY ID MODEL</p>";
        $query = $this->database->connect()->prepare("SELECT * FROM employees WHERE emp_no = :id");

        try {
            $query->execute([
                "id" => $id
            ]);
            $result = $query->fetch(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    function createEmployee($data)
    {
        // echo "<p>CREATE EMPLOYEE</p>";
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        $firstName = $data["first_name"];
        $lastName = $data["last_name"];
        $email = $data["email"];
        $gender = $data["gender"];
        $city = $data["city"];
        $streetAddress = $data["streetAddress"];
        $state = strtoupper($data["state"]);
        $age = $data["age"];
        $postalCode = $data["postal_code"];
        $phoneNumber = $data["phone_number"];

        $query = $this->database->connect()->prepare("INSERT INTO employees (first_name, last_name, email, gender, city, streetAddress, state, age, postal_code, phone_number) VALUES (:first_name, :last_name, :email, :gender, :city, :streetAddress, :state, :age, :postal_code, :phone_number)");

        try {
            $query->execute([
                "first_name" => $firstName,
                "last_name" => $lastName,
                "email" => $email,
                "gender" => $gender,
                "city" => $city,
                "streetAddress" => $streetAddress,
                "state" => $state,
                "age" => $age,
                "postal_code" => $postalCode,
                "phone_number" => $phoneNumber
            ]);
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    function updateEmployee($data)
    {
        // echo "<p>UPDATE EMPLOYEE MODEL</p>";
        $empNo = $data["emp_no"];
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

        $query = $this->database->connect()->prepare("UPDATE employees SET first_name = :first_name, last_name = :last_name, email = :email, gender = :gender, city = :city, streetAddress = :streetAddress, state = :state, age = :age, postal_code = :postal_code, phone_number = :phone_number WHERE emp_no = :emp_no");

        try {
            $query->execute([
                "emp_no" => $empNo,
                "first_name" => $firstName,
                "last_name" => $lastName,
                "email" => $email,
                "gender" => $gender,
                "city" => $city,
                "streetAddress" => $streetAddress,
                "state" => $state,
                "age" => $age,
                "postal_code" => $postalCode,
                "phone_number" => $phoneNumber
            ]);
            // $query->fetch(PDO::FETCH_ASSOC);
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    function deleteEmployee($id)
    {
        // echo "<p>DELETE BY ID MODEL</p>";
        $query = $this->database->connect()->prepare("DELETE FROM employees WHERE emp_no = :emp_no");

        try {
            $query->execute([
                "emp_no" => $id
            ]);
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
