<?php
// print_r($_POST)
?>

<p>Hi, <?= $_POST["name"] ?>! Thanks for purchasing <?= $_POST["quantity"] .
    " " .
    $_POST["product"] .
    "(s)." ?></p>
<p>An email will be sent to: <?= $_POST["email"] ?></p>