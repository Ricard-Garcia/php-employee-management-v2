
<?php
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

        // Do all the user validation here
        echo "<p>LoginController loaded</p>";
    }
}
