<?php
// Config
require_once "./config/baseConstants.php";
require_once "./config/constants.php";
require_once "./config/db.php";
// Libs
require_once LIBS . "Database.php";
require_once LIBS . "View.php";
require_once LIBS . "Controller.php";
require_once LIBS . "Model.php";
require_once LIBS . "Router.php";

// Initializing a new Router
$router = new Router();
