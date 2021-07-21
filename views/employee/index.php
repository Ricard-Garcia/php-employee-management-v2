<?php
require PHP . "head.php";
?>

<body>

    <?php
    require VIEWS . "header.php";
    ?>

    <main class="form-signin">
        <form id="formEmployee" action="./library/employeeController.php" method="PUT">
            <div class="container">
                <div class="row">
                    <div class="form-floating col-md-6">
                        <label class="mt-2" for="floatingName">Name</label>
                        <input name="name" value="<?php $employee[" name"] ?>" type="text" class="form-control" id="floatingName" placeholder="Employee name" data-bs-toggle="tooltip" data-bs-html="true" autofocus>
                    </div>
                    <div class="form-floating col-md-6">
                        <label class="mt-2" for="floatingLastName">Last Name</label>
                        <input name="lastName" value=" <?php $employee[" lastName"] ?>" type="text" class="form-control" id="floatingLastName" placeholder="Employee last name" data-bs-toggle="tooltip" data-bs-html="true">
                    </div>
                </div>
                <div class="row">
                    <div class="form-floating col-md-6">
                        <label class="mt-2" for="floatingEmailAddress">Email address</label>
                        <input name="emailAddress" value="<?php $employee[" email"] ?>'" type="email" class="form-control" id="floatingEmailAddress" placeholder="name@example.com" data-bs-toggle="tooltip" data-bs-html="true">
                    </div>
                    <div class="form-floating col-md-6">
                        <label class="mt-2" for="floatingEmail">Gender</label>
                        <select class="form-control" aria-label="Default select example">
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
                        <input name="city" value="<?php $employee["city"] ?>" type="text" class="form-control" id="floatingCity" placeholder="Employee city" data-bs-toggle="tooltip" data-bs-html="true">
                    </div>
                    <div class="form-floating col-md-6">
                        <label class="mt-2" for="floatingStreetAddress">Street address</label>
                        <input name="streetAddress" value="<?php $employee[" streetAddress"] ?>" type="text" class="form-control" id="floatingStreetAddress" placeholder="Employee street address" data-bs-toggle="tooltip" data-bs-html="true">
                    </div>
                </div>
                <div class="row">
                    <div class="form-floating col-md-6">
                        <label class="mt-2" for="floatingState">State</label>
                        <input name="state" value="<?php $employee[" state"] ?>" type="text" class="form-control" id="floatingState" placeholder="Employee state" data-bs-toggle="tooltip" data-bs-html="true">
                    </div>
                    <div class="form-floating col-md-6">
                        <label class="mt-2" for="floatingAge">Age</label>
                        <input name="age" value="<?php $employee["age"] ?>" type="text" class="form-control" id="floatingAge" placeholder="Employee age" data-bs-toggle="tooltip" data-bs-html="true">
                    </div>
                </div>
                <div class="row">
                    <div class="form-floating col-md-6">
                        <label class="mt-2" for="floatingPostalCode">Postal Code</label>
                        <input name="postalCode" value="<?php $employee["postalCode"] ?>" type="text" class="form-control" id="floatingPostalCode" placeholder="Employee postal code" data-bs-toggle="tooltip" data-bs-html="true">
                    </div>
                    <div class="form-floating col-md-6">
                        <label class="mt-2" for="floatingPhoneNumber">Phone Number</label>
                        <input name="phoneNumber" value="<?php $employee["phoneNumber"] ?>" type="text" class="form-control" id="floatingPhoneNumber" placeholder="Employe phone number" data-bs-toggle="tooltip" data-bs-html="true">
                    </div>
                </div>
                <div class="row">
                    <button class="btn btn-lg btn-primary mt-4" type="submit">Submit</button>
                    <a href="dashboard.php"><button class="btn btn-lg btn-outline-primary mt-4 ml-2" type="button">Return</button></a>
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