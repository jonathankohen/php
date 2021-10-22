<?php

$name = "Jon";
$on_gl = false;
$guest_number = 0;
$age = 33;
$party_message = "";

if ($on_gl) {
    $party_message = "Hey " . $name . "! Welcome!";
} elseif ($name == "Joey" || $name == "Sarah") {
    $party_message = "Sorry...";
} else {
    $party_message = "Get out.";
}

echo "<pre>" . $party_message . "</pre>";

$num = 3;

switch ($num) {
    case 1:
        echo "<pre>" . "red - " . $num . "</pre>";
        break;
    case 2:
        echo "<pre>" . "blue - " . $num . "</pre>";
        break;
    case 3:
        echo "<pre>" . "green - " . $num . "</pre>";
        break;
    default:
        echo "<pre>" . "no color" . "</pre>";
}
?>
