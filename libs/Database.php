<?php

class Database
{

    private $host;
    private $database;
    private $user;
    private $password;
    private $charset;
    private $error;

    public function __construct()
    {
        $this->host      = HOST;
        $this->database  = DB;
        $this->user      = USER;
        $this->password  = PASSWORD;
        $this->charset   = CHARSET;
    }

    // Method to connect to DB
    public function connect()
    {
        try {
            $connection = "mysql:host=" . $this->host . ";"
                . "dbname=" . $this->database . ";"
                . "user=" . $this->user . ";"
                . "password=" . $this->password . ";"
                . "charset=" . $this->charset;

            $options = [
                PDO::ATTR_ERRMODE           =>  PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES  => FALSE,
            ];

            $pdo = new PDO($connection, $this->user, $this->password, $options);
            return $pdo;
            $pdo = null;
        } catch (PDOException $e) {
            $this->error = "Error connecting to Database";
            echo $e->getMessage();
            return false;
        }
    }
};
