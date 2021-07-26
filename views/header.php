<header class="border border-dark border-bottom py-2 px-4 container-fluid d-flex justify-content-between navbar navbar-expand-lg navbar-light bg-light">
    <div class="d-flex">
        <a class="navbar-brand" href="#">JSGRID</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a id="dash" class="nav-link active" href="<?= BASE_URL . "/employees/defaultMethod" ?>">Dashboard</a>
                <a id="emp" class="nav-link" href="<?= BASE_URL . "/employees/newEmployee" ?>">Employee Page</a>
            </div>
        </div>
    </div>
    <div class="logout">
        <a class="btn btn-primary active" href="<?= BASE_URL . "/login/logOut?logout=true" ?>">Logout</a>
    </div>
</header>