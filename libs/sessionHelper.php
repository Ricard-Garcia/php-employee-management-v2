<?php
session_start();
logOut();

function logOut()
{
  if (isset($_GET["logout"])) {
    unset($_SESSION);
    session_destroy();

    if (!isset($_SESSION)) {
      header("location: ../../index.php");
    }
  }
}
