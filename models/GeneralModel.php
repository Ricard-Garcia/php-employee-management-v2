<?php

class GeneralModel extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    function getEmployees()
    {
        echo "<p>GET ALL EMPLOYEES MODEL</p>";
    }
    function getById()
    {
        echo "<p>GET BY ID MODEL</p>";
    }
    function updateEmployee()
    {
        echo "<p>UPDATE EMPLOYEE MODEL</p>";
    }
    function deleteEmployee()
    {
        echo "<p>DELETE EMPLOYEE MODEL</p>";
    }
}
