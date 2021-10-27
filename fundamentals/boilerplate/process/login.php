<?php
session_start();
require "../config/mysql_connection.php";

$_SESSION["login_errors"] = [];

$email = escape_this_string($_POST["email"]);
$esc_password = escape_this_string($_POST["password"]);

// Search for a user in db that has the email from the form input.
$query = "SELECT * FROM users WHERE email = '{$email}'";
$user = fetch_record($query);

// If we find a user, THEN compare passwords and do some encryption comparisons.
if (!empty($user)) {
    $enc_password = md5($esc_password . "" . $user['salt']);
    if ($user['password'] == $enc_password) {
        // If the encrypted password from the db and encrypted password from the form match, email and user_id are saved in session.
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["email"] = $user["email"];
        header("location: ../pages/success.php");
        die();
    } else {
        $_SESSION["login_errors"][] = "Email/password combination failed.";
        header("location: ../pages/index.php");
        die();
    }
} else {
    // If the email was not found in the db, we do not let the user know, as this knowledge is sensitive.
    $_SESSION["login_errors"][] = "Email/password combination failed.";
    header("location: ../pages/index.php");
    die();
}
