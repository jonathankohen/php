<?php
session_start();

// if (isset($_SESSION["user_id"])) {
//     unset($_SESSION["user_id"]);
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PHP</title>
</head>

<body>
    <div class="container my-5">
        <!-- GREETING -->
        <div class="row my-5">
            <div class="col-auto mx-auto">
                <h1>Boilerplate</h1>
            </div>
        </div>

        <!-- FORMS -->
        <div class="row">
            <?php
            require "../include/reg_form.php";
            require "../include/login_form.php";
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>