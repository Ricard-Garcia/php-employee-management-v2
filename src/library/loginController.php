
<?php

require_once("./loginManager.php");

$method = $_SERVER['REQUEST_METHOD'];

if ($method == "POST") {
    $data = array(
        "email" => $_POST["email"],
        "password" => $_POST["password"]
    );
    checkUserInfo($data);
}
