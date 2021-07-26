<?php

class Database
{

    private $host;
    private $database;
    private $user;
    private $password;
    private $charset;
    private $error;
    private $pdo;

    public function __construct()
    {
        $this->host      = HOST;
        $this->database  = DB;
        $this->user      = USER;
        $this->password  = PASSWORD;
        $this->charset   = CHARSET;
        $this->pdo       = null;
    }

    // Connect to DB
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

            $this->pdo = new PDO($connection, $this->user, $this->password, $options);
            return $this->pdo;
        } catch (PDOException $e) {
            $this->error = "Error connecting to Database";
            echo $e->getMessage();
            return false;
        }
    }

    // Disconnect to DB
    public function __destruct()
    {
        $this->pdo = null;
    }
};
