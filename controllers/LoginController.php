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

class LoginController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function defaultMethod()
    {
        $this->view->render("login/index");
    }

    function loginUser()
    {
        $loginSucces = $this->model->checkUserInfo($_POST);

        if ($loginSucces == true) {
            header("Location:" . BASE_URL . "/general");
        } else {
            header("Location:" . BASE_URL . "/login?message=error");
            //$this->view->render("login/index");
        }
    }
}
