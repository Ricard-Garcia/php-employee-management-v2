<?php
class LoginController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function defaultMethod()
    {
        $session = $this->sessionController->checkSession();

        if ($session) {
            header("Location:" . BASE_URL . "/employees/");
            //$this->view->render("dashboard/index");
        } else {
            $this->view->render("login/index");
        }
    }

    function loginUser()
    {
        $loginSucces = $this->model->checkUserInfo($_POST);

        if ($loginSucces == true) {
            header("Location:" . BASE_URL . "/employees/");
        } else {
            header("Location:" . BASE_URL . "/login?message=error");
        }
    }

    function logOut()
    {
        $this->model->checkLogout();
    }
}
