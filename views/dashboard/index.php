<?php
require TEMPLATES . "head.php";
?>


<body onmousemove="reset_interval()" onclick="reset_interval()" onkeypress="reset_interval()" onscroll="reset_interval()">

  <?php
  require VIEWS . "header.php";
  ?>

  <main class="p-4">
    <div id="jsGrid"></div>
  </main>
  <?php
  require VIEWS . "footer.php";
  ?>
  <script src="<?= JS . "jsgrid.js" ?>"></script>
  <script src="<?= JS . "navbar.js" ?>"></script>
</body>

</html>