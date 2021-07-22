<?php

/* -------------------------------------------------------------------------- */
/*                             Old code from Login                            */
/* -------------------------------------------------------------------------- */

// require_once("./loginManager.php");

// $method = $_SERVER['REQUEST_METHOD'];

// if ($method == "POST") {
//     $data = array(
//         "email" => $_POST["email"],
//         "password" => $_POST["password"]
//     );
//     checkUserInfo($data);
// }


class IndexController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function render()
    {
        $this->view->render("login/index");
    }
}
