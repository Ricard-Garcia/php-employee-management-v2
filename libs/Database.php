<?php

class Database
{

    private $host;
    private $database;
    private $user;
    private $password;
    private $charset;
    private $error;
    private $connection;


    public function __construct()
    {
        $this->host      = HOST;
        $this->database  = DB;
        $this->user      = USER;
        $this->password  = PASSWORD;
        $this->charset   = CHARSET;
        $this->connection = CONNECTION;
    }

    // Method to connect to DB
    public function connect()
    {
        try {
            $options = [
                PDO::ATTR_ERRMODE           =>  PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES  => FALSE,
            ];

            $pdo = new PDO($this->connection, $this->user, $this->password, $options);

            return $pdo;
        } catch (PDOException $e) {
            $this->error = "Error connecting to Database";
            // Render en error view

        }
    }

    public function __destruct()
    {
        $this->mysqli->close();
    }
};
