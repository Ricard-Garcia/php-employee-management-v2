<?php
require TEMPLATES . "head.php";

// Set employee array
if (isset($this->employee)) {
    // echo "Has employee";

    $formMethod = "PUT";

    $getEmployee = $this->employee;

    $employee = [
        "emp_no" => $getEmployee["emp_no"],
        "first_name" => $getEmployee["first_name"],
        "last_name" => $getEmployee["last_name"],
        "email" => $getEmployee["email"],
        "gender" => $getEmployee["gender"],
        "age" => $getEmployee["age"],
        "state" => $getEmployee["state"],
        "city" => $getEmployee["city"],
        "streetAddress" => $getEmployee["streetAddress"],
        "postal_code" => $getEmployee["postal_code"],
        "phone_number" => $getEmployee["phone_number"]
    ];

    $genderSelect = "";
    // Setting up select echo string
    $genderArray = array("M", "W");
    foreach ($genderArray as $genderItem) {
        if ($getEmployee["gender"] == $genderItem && $getEmployee["gender"] != "") {
            $genderSelect .= "<option selected>" . $genderItem . "</option>";
        } else {
            $genderSelect .= "<option>" . $genderItem . "</option>";
        }
    }

    $action = BASE_URL . "/employees/updateEmployee/" . $employee["emp_no"];
} else {
    // echo "Empty employee";

    $formMethod = "POST";

    $employee = [
        "emp_no" => null,
        "first_name" => null,
        "last_name" => null,
        "email" => null,
        "gender" => null,
        "age" => null,
        "state" => null,
        "city" => null,
        "streetAddress" => null,
        "postal_code" => null,
        "phone_number" => null
    ];

    $genderSelect = "";
    $genderSelect .= "<option value='' hidden selected>Select</option>";
    $genderSelect .= "<option value='M'>M</option>";
    $genderSelect .= " <option value='W'>W</option>";

    $action = BASE_URL . "/employees/createEmployee";
}

?>

<body>

    <?php
    require VIEWS . "header.php";
    ?>

    <main class="form-signin container-fluid">
        <form class="p-0 w-75" id="formEmployee" action="<?= $action ?>" method="POST">
            <div class="container">
                <div class="row">
                    <div class="form-floating col-md-6">
                        <!-- Hidden input with id -->
                        <input type="hidden" name="emp_no" value="<?= $employee["emp_no"] ?>">

                        <label class="mt-2" for="floatingName">Name</label>
                        <input name="first_name" value="<?= $employee["first_name"] ?>" type="text" class="form-control" id="floatingName" placeholder="Employee name" data-bs-toggle="tooltip" data-bs-html="true" autofocus required>
                    </div>
                    <div class="form-floating col-md-6">
                        <label class="mt-2" for="floatingLastName">Last Name</label>
                        <input name="last_name" value="<?= $employee["last_name"] ?>" type="text" class="form-control" id="floatingLastName" placeholder="Employee last name" data-bs-toggle="tooltip" data-bs-html="true" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-floating col-md-6">
                        <label class="mt-2" for="floatingEmailAddress">Email address</label>
                        <input name="email" value="<?= $employee["email"] ?>" type="email" class="form-control" id="floatingEmailAddress" placeholder="name@example.com" data-bs-toggle="tooltip" data-bs-html="true" required>
                    </div>
                    <div class="form-floating col-md-6">
                        <label class="mt-2" for="floatingGender">Gender</label>
                        <select id="genderSelect" name="gender" class="form-control" aria-label="Default select example" required>
                            <?= $genderSelect ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-floating col-md-6">
                        <label class="mt-2" for="floatingCity">City</label>
                        <input name="city" value="<?= $employee["city"] ?>" type="text" class="form-control" id="floatingCity" placeholder="Employee city" data-bs-toggle="tooltip" data-bs-html="true" required>
                    </div>
                    <div class="form-floating col-md-6">
                        <label class="mt-2" for="floatingStreetAddress">Street address</label>
                        <input name="streetAddress" value="<?= $employee["streetAddress"] ?>" type="number" class="form-control" id="floatingStreetAddress" placeholder="Employee street address" data-bs-toggle="tooltip" data-bs-html="true" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-floating col-md-6">
                        <label class="mt-2" for="floatingState">State</label>
                        <input name="state" value="<?= $employee["state"] ?>" type="text" class="form-control" id="floatingState" placeholder="Employee state" data-bs-toggle="tooltip" data-bs-html="true" maxlength="3" required>
                    </div>
                    <div class="form-floating col-md-6">
                        <label class="mt-2" for="floatingAge">Age</label>
                        <input name="age" value="<?= $employee["age"] ?>" type="number" class="form-control" id="floatingAge" placeholder="Employee age" data-bs-toggle="tooltip" data-bs-html="true" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-floating col-md-6">
                        <label class="mt-2" for="floatingPostalCode">Postal Code</label>
                        <input name="postal_code" value="<?= $employee["postal_code"] ?>" type="number" class="form-control" id="floatingPostalCode" placeholder="Employee postal code" data-bs-toggle="tooltip" data-bs-html="true" required>
                    </div>
                    <div class="form-floating col-md-6">
                        <label class="mt-2" for="floatingPhoneNumber">Phone Number</label>
                        <input name="phone_number" value="<?= $employee["phone_number"] ?>" type="string" class="form-control" id="floatingPhoneNumber" placeholder="Employe phone number" data-bs-toggle="tooltip" data-bs-html="true" required>
                    </div>
                </div>
                <div class="px-3 row">
                    <button class="btn btn-lg btn-primary mt-4" type="submit">Submit</button>
                    <a href="<?= BASE_URL . "/employees/"; ?>"><button class="btn btn-lg btn-outline-primary mt-4 ml-2" type="button">Return</button></a>
                </div>
            </div>
        </form>
    </main>

    <?php
    require VIEWS . "footer.php";
    ?>

    <script src="<?= JS . "navbar.js" ?>"></script>
</body>

</html>