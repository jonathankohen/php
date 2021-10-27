<?php
session_start();
require "../config/mysql_connection.php";

$_SESSION["reg_errors"] = [];

if (empty($_POST["first_name"])) {
    $_SESSION["reg_errors"][] = "First name is required.";
} elseif (strlen($_POST["first_name"]) < 2) {
    $_SESSION["reg_errors"][] = "First name must be at least 2 characters.";
} elseif (!ctype_alpha($_POST["first_name"])) {
    $_SESSION["reg_errors"][] = "First name can only contain letters.";
}
if (empty($_POST["last_name"])) {
    $_SESSION["reg_errors"][] = "Last name is required.";
} elseif (strlen($_POST["last_name"]) < 2) {
    $_SESSION["reg_errors"][] = "Last name must be at least 2 characters.";
} elseif (!ctype_alpha($_POST["last_name"])) {
    $_SESSION["reg_errors"][] = "Last name can only contain letters.";
}
if (empty($_POST["email"])) {
    $_SESSION["reg_errors"][] = "Email is required.";
} elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $_SESSION["reg_errors"][] = "Email is invalid.";
}
if (empty($_POST["password"])) {
    $_SESSION["reg_errors"][] = "Password is required.";
} elseif (strlen($_POST["password"]) < 8) {
    $_SESSION["reg_errors"][] = "Password must be at least 8 characters.";
} elseif ($_POST["password"] != $_POST["c_password"]) {
    $_SESSION["reg_errors"][] = "Passwords must match.";
}

if (count($_SESSION["reg_errors"]) > 0) {
    header("location: ../pages/index.php");
    die();
} else {
    // Checking if email is already in the db.
    $query = "SELECT id FROM users WHERE email = '{$_POST["email"]}'";
    $user = fetch_record($query);

    // Redirects to index page if there are errors.
    if (!empty($user)) {
        $_SESSION["reg_errors"][] = "Email already taken.";
        header("location: ../pages/index.php");
        die();
    } else {
        // Escapes any strings sent in the form.
        $first_name = escape_this_string($_POST["first_name"]);
        $last_name = escape_this_string($_POST["last_name"]);
        $email = escape_this_string($_POST["email"]);
        $esc_password = escape_this_string($_POST["password"]);

        // Creates a salt and encrypts the password with it.
        $salt = bin2hex(openssl_random_pseudo_bytes(22));
        $enc_password = md5($esc_password . "" . $salt);

        $query = "INSERT INTO users (first_name, last_name, email, password, salt) VALUES ('{$first_name}', '{$last_name}', '{$email}', '{$enc_password}', '{$salt}')";

        $last_row_id = run_mysql_query($query);

        // If query is successful, saves user_id and email to session.
        if ($last_row_id > 0) {
            $_SESSION["user_id"] = $last_row_id;
            $_SESSION["email"] = $email;
            header("location: ../pages/success.php");
            die();
        } else {
            die("The INSERT failed for this user");
        }
    }
}
