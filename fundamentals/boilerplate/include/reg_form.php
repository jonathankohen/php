<div class="col">
    <div class="row mb-3">
        <div class="col">
            <h3>Registration</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-7">
            <form action="../process/reg.php" method="POST">
                <div class="row g-3 justify-content-center align-items-center mb-3">
                    <div class="col-auto">
                        <label for="first_name" class="col-form-label">First name:</label>
                    </div>

                    <div class="col-auto ms-auto">
                        <input type="text" name="first_name" id="first_name" class="form-control" aria-describedby="First name input">
                    </div>
                </div>

                <div class="row g-3 justify-content-center align-items-center mb-3">
                    <div class="col-auto">
                        <label for="last_name" class="col-form-label">Last name:</label>
                    </div>

                    <div class="col-auto ms-auto">
                        <input type="text" name="last_name" id="last_name" class="form-control" aria-describedby="Last name input">
                    </div>
                </div>

                <div class="row g-3 justify-content-center align-items-center mb-3">
                    <div class="col-auto">
                        <label for="email" class="col-form-label">Email:</label>
                    </div>

                    <div class="col-auto ms-auto">
                        <input type="text" name="email" id="email" class="form-control" aria-describedby="Email input">
                    </div>
                </div>

                <div class="row g-3 justify-content-center align-items-center mb-3">
                    <div class="col-auto">
                        <label for="password" class="col-form-label">Password:</label>
                    </div>

                    <div class="col-auto ms-auto">
                        <input type="password" name="password" id="password" class="form-control" aria-describedby="Password Input">
                    </div>
                </div>

                <div class="row g-3 justify-content-center align-items-center mb-3">
                    <div class="col-auto">
                        <label for="c_password" class="col-form-label">Confirm password:</label>
                    </div>

                    <div class="col-auto ms-auto">
                        <input type="password" name="c_password" id="c_password" class="form-control" aria-describedby="Confirm Password Input">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <!-- ERRORS -->
    <div class="row my-5">
        <div class="col-auto mx-auto text-danger">
            <p>
                <?php if (isset($_SESSION["reg_errors"])) {
                    foreach ($_SESSION["reg_errors"] as $error) {
                        echo "<p>" . $error . "</p>";
                    }
                } ?>
            </p>
        </div>
    </div>
</div>