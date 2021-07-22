<?php
require TEMPLATES . "head.php";
?>

<body onmousemove="reset_interval()" onclick="reset_interval()" onkeypress="reset_interval()" onscroll="reset_interval()">

    <?php
    require VIEWS . "header.php";
    ?>
    <main>
        <h1 class="w-100 text-left error-message">Error 400&nbsp;<?php echo $this->message; ?></h1>
    </main>
    <?php
    require VIEWS . "footer.php";
    ?>
</body>

</html>