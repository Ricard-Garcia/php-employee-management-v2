<?php
// session_start();
// if (isset($_SESSION["email"])) {
//     header("Location: src/Dashboard.php");
// }
// if (!isset($_SESSION["noActivity"])) {
//     $_SESSION["noActivity"] = getdate();
// }

require TEMPLATES . "head.php";
//echo $this->test;
?>

<body>
    <main class="form-signin d-flex flex-column justify-content-center">
        <form id="formLogIn" action="<?= BASE_URL . "/login/loginUser"; ?>" method="POST">

            <h1 class="h3 mb-5 fw-normal">Welcome to employee management!</h1>

            <div class="form-floating">
                <input name="email" type="text" class="form-control" id="floatingEmail" placeholder="name@example.com" data-bs-toggle="tooltip" data-bs-html="true" title="imassembler@assemblerschool.com" autofocus>
                <label class="mt-2" for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" title="Assemb13r">
                <label for="floatingPassword">Password</label>
            </div>
            <!--  warning alert -->
            <?php
            if (isset($_GET["message"])) {
                if ($_GET["message"] == "error") {
                    echo  '<div id="wrongLogIn" class="alert alert-danger" role="alert">
                        Wrong email or password
                        </div>';
                }
            }
            ?>

            <button class="w-100 btn btn-lg btn-dark" type="submit">Log in</button>
        </form>
    </main>
    <?php
    require VIEWS . "footer.php";
    ?>
</body>

<script src="<?= JS . "index.js" ?>"></script>

</html>