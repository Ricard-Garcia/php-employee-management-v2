<?php

class Model
{

    function __construct()
    {
        // echo "<p>Loaded Base Model class</p>";
        //Connection with database
        $this->database = new Database();
    }
}
