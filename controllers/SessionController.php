<?php

class SessionController
{
    public function __construct()
    {
        session_start();
    }

    function checkSession()
    {
        if (isset($_SESSION['email'])) {
            return true;
        } else {
            return false;
        }
    }
}
