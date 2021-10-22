<?php
// Basically objects?

$arr = [
    ["first_name" => "Jon", "last_name" => "Kohen", "age" => 29],
    ["first_name" => "Erika", "last_name" => "Person", "age" => 31],
    ["first_name" => "Joyce", "last_name" => "Manor", "age" => 22],
];

foreach ($arr as $row) {
    foreach ($row as $key => $value) {
        echo $key . ": " . $value . ", ";
    }
    echo "<br>";
}
?>
