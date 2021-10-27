<?php
session_start();
require_once "../mysql_connection.php";

$errors = [];

if (empty($_POST["email"])) {
    $errors[] = "Please enter your email.";
}
if (empty($_POST["pw"])) {
    $errors[] = "Please enter your new password.";
}

// if (count($errors) > 0) {
//     $_SESSION['errors'] = $errors;
//     header("Location: ../pages/index.php");
// } else {
//     $query = "INSERT INTO users (first_name, last_name, email, password, created_at, updated_at)
//           VALUES('{$_POST['first_name']}', '{$_POST['last_name']}', '{$_POST['email']}', '{$_POST["pw"]}', NOW(), NOW())";

//     if (run_mysql_query($query)) {
//         $_SESSION['message'] = "New user has been added correctly!";
//         $_SESSION['first_name'] = $_POST["first_name"];
//     } else {
//         $_SESSION['message'] = "Failed to add new user.";
//     }

//     header("Location: ../pages/success.php");
// }
