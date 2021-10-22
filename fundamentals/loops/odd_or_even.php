<?php
// Create a program that counts from 1 to 2000. As it loops through each number, have your program generate the number and a message saying whether it's odd or even.

for ($i = 0; $i <= 10; $i++) {
    if ($i == 0) {
        echo $i . " is " . "even." . "<br>";
        continue;
    }

    switch ($i) {
        case $i % 2 != 0:
            echo $i . " is " . "odd." . "<br>";
            break;
        case $i % 3 != 0:
            echo $i . " is " . "even." . "<br>";
            break;
    }
}
?>
