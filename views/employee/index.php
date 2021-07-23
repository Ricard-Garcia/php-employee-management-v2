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

    $action = "updateEmployee/" . $employee["emp_no"];
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

    $action = "createEmployee";
}

?>

<body>

    <?php
    require VIEWS . "header.php";
    ?>

    <main class="form-signin container-fluid">
        <form class="p-0 w-75" id="formEmployee" action="<?= $action ?>" method="<?= $formMethod ?>">
            <div class="container">
                <div class="row">
                    <div class="form-floating col-md-6">
                        <label class="mt-2" for="floatingName">Name</label>
                        <input name="name" value="<?= $employee["first_name"] ?>" type="text" class="form-control" id="floatingName" placeholder="Employee name" data-bs-toggle="tooltip" data-bs-html="true" autofocus required>
                    </div>
                    <div class="form-floating col-md-6">
                        <label class="mt-2" for="floatingLastName">Last Name</label>
                        <input name="lastName" value="<?= $employee["last_name"] ?>" type="text" class="form-control" id="floatingLastName" placeholder="Employee last name" data-bs-toggle="tooltip" data-bs-html="true" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-floating col-md-6">
                        <label class="mt-2" for="floatingEmailAddress">Email address</label>
                        <input name="emailAddress" value="<?= $employee["email"] ?>" type="email" class="form-control" id="floatingEmailAddress" placeholder="name@example.com" data-bs-toggle="tooltip" data-bs-html="true" required>
                    </div>
                    <div class="form-floating col-md-6">
                        <label class="mt-2" for="floatingEmail">Gender</label>
                        <select class="form-control" aria-label="Default select example" required>
                            <option selected>Choose one</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                            <option value="3">Other</option>
                            <option value="3">No one</option>
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
                        <input name="streetAddress" value="<?= $employee["streetAddress"] ?>" type="text" class="form-control" id="floatingStreetAddress" placeholder="Employee street address" data-bs-toggle="tooltip" data-bs-html="true" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-floating col-md-6">
                        <label class="mt-2" for="floatingState">State</label>
                        <input name="state" value="<?= $employee["state"] ?>" type="text" class="form-control" id="floatingState" placeholder="Employee state" data-bs-toggle="tooltip" data-bs-html="true" required>
                    </div>
                    <div class="form-floating col-md-6">
                        <label class="mt-2" for="floatingAge">Age</label>
                        <input name="age" value="<?= $employee["age"] ?>" type="number" class="form-control" id="floatingAge" placeholder="Employee age" data-bs-toggle="tooltip" data-bs-html="true" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-floating col-md-6">
                        <label class="mt-2" for="floatingPostalCode">Postal Code</label>
                        <input name="postalCode" value="<?= $employee["postal_code"] ?>" type="number" class="form-control" id="floatingPostalCode" placeholder="Employee postal code" data-bs-toggle="tooltip" data-bs-html="true" required>
                    </div>
                    <div class="form-floating col-md-6">
                        <label class="mt-2" for="floatingPhoneNumber">Phone Number</label>
                        <input name="phoneNumber" value="<?= $employee["phone_number"] ?>" type="number" class="form-control" id="floatingPhoneNumber" placeholder="Employe phone number" data-bs-toggle="tooltip" data-bs-html="true" required>
                    </div>
                </div>
                <div class="px-3 row">
                    <button class="btn btn-lg btn-primary mt-4" type="submit">Submit</button>
                    <a href=""><button class="btn btn-lg btn-outline-primary mt-4 ml-2" type="button">Return</button></a>
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