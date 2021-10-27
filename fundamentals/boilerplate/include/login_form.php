<div class="col">
    <div class="row mb-3">
        <div class="col">
            <h3>Login</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-7">
            <form action="../process/login.php" method="POST">
                <div class="row g-3 justify-content-center align-items-center mb-3">
                    <div class="col-auto">
                        <label for="email" class="col-form-label">Email:</label>
                    </div>

                    <div class="col-auto ms-auto">
                        <input type="email" name="email" id="email" class="form-control" aria-describedby="Email Input">
                    </div>
                </div>

                <div class="row g-3 justify-content-center align-items-center mb-3">
                    <div class="col-auto">
                        <label for="pw" class="col-form-label">Password:</label>
                    </div>

                    <div class="col-auto ms-auto">
                        <input type="password" name="pw" id="pw" class="form-control" aria-describedby="Password Input">
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
                <?php if (isset($_SESSION["login_errors"])) {
                    foreach ($_SESSION["login_errors"] as $error) {
                        echo "<p>" . $error . "</p>";
                    }
                } ?>
            </p>
        </div>
    </div>
</div>