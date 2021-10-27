<?php
session_start();
require "../mysql_connection.php";

$errors = [];
$email_re =
    '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

if (empty($_POST["first_name"])) {
    $errors[] = "Please enter your first name.";
}
if (empty($_POST["last_name"])) {
    $errors[] = "Please enter your last name.";
}
if (empty($_POST["email"])) {
    $errors[] = "Please enter your email.";
}
if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Please enter a valid email.";
}
if (empty($_POST["password"])) {
    $errors[] = "Please enter your new password.";
}
if (empty($_POST["c_password"])) {
    $errors[] = "Please confirm your password.";
}
if ($_POST["password"] !== $_POST["c_password"]) {
    $errors[] = "Passwords must match.";
}

if (count($errors) > 0) {
    $_SESSION["errors"] = $errors;
    header("Location: ../pages/index.php");
} else {
    $first_name = escape_this_string($_POST["first_name"]);
    $last_name = escape_this_string($_POST["last_name"]);
    $email = escape_this_string($_POST["email"]);
    $password = md5($_POST["password"]);

    $query = "INSERT INTO users (first_name, last_name, email, password, created_at, updated_at)
          VALUES('{$first_name}', '{$last_name}', '{$email}', '{$password}', NOW(), NOW())";

    $user_id = run_mysql_query($query);

    if ($user_id) {
        $_SESSION["message"] = "New user has been added correctly!";
        $_SESSION["user_id"] = $user_id;
    } else {
        $_SESSION["message"] = "Failed to add new user.";
    }

    header("Location: ../pages/success.php");
}
