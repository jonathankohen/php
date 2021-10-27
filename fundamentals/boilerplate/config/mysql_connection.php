<?php
define("DB_HOST", "localhost:3306");
define("DB_USER", "root");
define("DB_PASS", "KesheT12");
define("DB_NAME", "php_fundamentals");

$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($connection->connect_errno) {
    die(
        "Failed to connect to MySQL: (" .
            $connection->connect_errno .
            ") " .
            $connection->connect_error
    );
}

function fetch_all($query)
{
    $data = [];
    global $connection;
    $result = $connection->query($query);

    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    return $data;
}

function fetch_record($query)
{
    global $connection;
    $result = $connection->query($query);
    return mysqli_fetch_assoc($result);
}

// Used to run INSERT/DELETE/UPDATE, queries that don't return a value. This function returns the the id of the most recently inserted record in your database.
function run_mysql_query($query)
{
    global $connection;
    $result = $connection->query($query);

    // Returns the ID attribute of the connection object.
    return $connection->insert_id;
}

// Returns an escaped string. E.g., the string "That's crazy!" will be returned as "That\'s crazy!". It also helps secure the database against SQL injection.
function escape_this_string($string)
{
    global $connection;
    return $connection->real_escape_string($string);
}

function login($email, $password)
{
    $errors = [];

    if (empty($_POST["email"])) {
        $errors[] = "Please enter your email.";
    }
    if (empty($_POST["pw"])) {
        $errors[] = "Please enter your new password.";
    }

    global $connection;
    $esc_email = escape_this_string($email);
    $enc_password = md5($password);

    $query = "SELECT * FROM users WHERE email = '$esc_email' AND password = '$enc_password' ";

    $user = fetch_record($query);

    if ($user) {
        echo "YOU ARE LOGGED IN! <br>";
    } else {
        echo "ERROR! Wrong email and password combination! <br>";
    }

    echo $query;
}
