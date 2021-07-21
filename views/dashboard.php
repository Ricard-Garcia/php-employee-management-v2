<?php

include "library/sessionHelper.php";

if (!isset($_SESSION["email"])) {
  header("Location: ../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script type="text/javascript" src="../node_modules/jquery/dist/jquery.min.js"></script>
  <link type="text/css" rel="stylesheet" href="../node_modules/jsgrid/dist/jsgrid.min.css" />
  <link type="text/css" rel="stylesheet" href="../node_modules/jsgrid/dist/jsgrid-theme.min.css" />
  <link rel="stylesheet" href="../assets/css/main.css" />
  <link type="text/css" rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css" />

  <script type="text/javascript" src="../node_modules/jsgrid/dist/jsgrid.min.js"></script>

  <link rel="stylesheet" href="../styles.css">
  <title>Document</title>
</head>

<body onmousemove="reset_interval()" onclick="reset_interval()" onkeypress="reset_interval()" onscroll="reset_interval()">
  <?php
  include "../assets/html/header.html";
  ?>
  <div id="jsGrid"></div>
</body>


</html>
<script src="../assets/js/jsgrid.js"></script>
<script src="../assets/js/navbar.js"></script>