<?php
require TEMPLATES . "head.php";
?>

<body onmousemove="reset_interval()" onclick="reset_interval()" onkeypress="reset_interval()" onscroll="reset_interval()">

    <?php
    require VIEWS . "header.php";
    ?>
    <main>
        <h1 class="error-message">Generic error message</h1>
    </main>
    <?php
    require VIEWS . "footer.php";
    ?>
</body>

</html>