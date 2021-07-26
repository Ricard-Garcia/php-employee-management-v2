<?php
// Defining constants for db connection

define("HOST", "localhost");

define("DB", "emp_man_V2");

define("USER", "root");

define("PASSWORD", "root");

define('CHARSET', 'utf8mb4');

define('CONNECTION', "mysql:host=" . HOST . ";"
    . "dbname=" . DB . ";"
    . "user=" . USER . ";"
    . "password=" . PASSWORD . ";"
    . "charset=" . CHARSET);
