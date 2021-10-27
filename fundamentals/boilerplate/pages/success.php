<?php
session_start();

if (isset($_SESSION["reg_errors"]) || isset($_SESSION["login_errors"])) {
    unset($_SESSION["reg_errors"]);
    unset($_SESSION["login_errors"]);
}

require "../config/mysql_connection.php";

$people = fetch_all("SELECT * FROM users");
$logged_in_user = fetch_record(
    "SELECT * FROM users WHERE id = {$_SESSION["user_id"]}"
);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css.php">
    <title>PHP</title>
</head>

<body>
    <div class="container my-5">
        <div class="row mb-5">
            <div class="col">
                <h1>
                    Welcome,
                    <?php echo $logged_in_user["first_name"] .
                        " " .
                        $logged_in_user["last_name"]; ?>
                </h1>
            </div>
        </div>

        <a class="btn btn-outline-primary" href="./index.php" role="button">Go Back</a>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>