<?php

class EmployeesModel extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    function getEmployees()
    {
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
        if ($data["last_name"] == "") {
            $comingLastName = null;
            $comingGender = null;
        } else {
            $comingLastName = $data["last_name"];
            $comingGender = $data["gender"];
        }

        $firstName = $data["first_name"];
        $lastName = $comingLastName;
        $email = $data["email"];
        $gender = $comingGender;
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
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    function deleteEmployee($id)
    {
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
