<?php

class Model
{

    function __construct()
    {
        //Connection with database
        $this->database = new Database();
    }
}
