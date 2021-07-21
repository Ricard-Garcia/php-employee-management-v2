<?php

class Database
{

    private $host;
    private $database;
    private $user;
    private $password;
    private $error;


    public function __construct()
    {
        $this->host      = HOST;
        $this->database  = DB;
        $this->user      = USER;
        $this->password  = PASSWORD;
    }

    // Method to connect to DB
    public function connect()
    {
        try {
            $connection = "mysql:host=" . $this->host . ";"
                . "dbname=" . $this->database . ";"
                . "user=" . $this->user . ";"
                . "password=" . $this->password;

            $options = [
                PDO::ATTR_ERRMODE           =>  PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES  => FALSE,
            ];

            $pdo = new PDO($connection, $this->user, $this->password, $options);

            return $pdo;
        } catch (PDOException $e) {

            $this->error = "Error connecting to Database";
            // Render en error view

        }
    }
};
