<?php

class GeneralController extends Controller
{

    public function __construct()
    {
        echo "<p>General Controller Loaded</p>";
    }

    function getEmployees()
    {
        echo "<p>GET ALL EMPLOYEES</p>";
    }
    function getById()
    {
        echo "<p>GET BY ID</p>";
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
