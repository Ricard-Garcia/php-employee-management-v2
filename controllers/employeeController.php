<?php

class EmployeeController extends Controller
{

  function __construct()
  {
    parent::__construct();
    echo "<p> This is EmployeeController </p>";
  }
}

// require "employeeManager.php";

// $method = $_SERVER['REQUEST_METHOD'];

// switch ($method) {
//   case "GET":
//     echo getEmployees();
//     break;
//   case "POST":
//     addEmployee($_POST);
//     break;
//   case "PUT":
//     parse_str(file_get_contents("php://input"), $_PUT);
//     updateEmployee($_PUT);
//     header("Location: ../employee.php?id=" . $_PUT["id"]);
//     break;
//   case "DELETE":
//     parse_str(file_get_contents("php://input"), $_DELETE);
//     deleteEmployee($_DELETE["id"]);
//     break;
// }
