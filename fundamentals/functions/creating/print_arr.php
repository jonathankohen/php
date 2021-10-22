<?php
define("ARR", [1, 2, 3, 4]);

function print_arr()
{
    echo "<pre>" .
        "There are " .
        count(ARR) .
        " elements in this array." .
        "</pre>";
    foreach (ARR as $value) {
        echo "<pre>" . $value . "</pre>";
    }
}

print_arr();
?>
