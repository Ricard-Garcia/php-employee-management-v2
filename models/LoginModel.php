<?php

class LoginModel extends Model
{

    public $loginSsucces = false;

    function __construct()
    {
        parent::__construct();
    }

    function checkUserInfo($data)
    {
        $query = $this->database->connect()->query("SELECT * FROM admins;")->fetchAll(PDO::FETCH_ASSOC);

        foreach ($query as $user) {
            if ($user["email"] == $data["email"]) {
                if (password_verify($data["password"], $user["password"])) {
                    $_SESSION["email"] = $data["email"];
                    $loginSucces = true;
                    return $loginSucces;
                } else {
                    $loginSucces = false;
                    return $loginSucces;
                }
            } else {
                $loginSucces = false;
                return $loginSucces;
            }
        }
    }

    function checkLogout()
    {
        if (isset($_GET["logout"])) {
            unset($_SESSION);
            session_destroy();

            if (!isset($_SESSION)) {
                header("location:" . BASE_URL . "/login/");
            }
        }
    }
}
