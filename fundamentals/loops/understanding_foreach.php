<?php
// Indices and values
// $x = [1, 3, 5, 7];
// foreach ($x as $key => $value) {
//     echo $key . " - " . $value . "<br>";
// }

// Just the values
// $x = [1, 3, 5, 7];
// foreach ($x as $value) {
//     echo $value . "<br>";
// }

// Keys and values
// $x = ["hi" => "Dojo", "awesome" => "game"];
// foreach ($x as $key => $value) {
//     echo $key . " - " . $value . "<br>";
// }

// Only values
// $x = ["hi" => "Dojo", "awesome" => "game"];
// foreach ($x as $key => $value) {
//     echo $value . "<br>";
// }

// Only values
// $x = ["hi" => "Dojo", "awesome" => "game"];
// foreach ($x as $key => $value) {
//     echo $key . "<br>";
// }

// Key will be index. Value will be arr.
// So,
// {0}
// var_dumping value
// Array [...]
// {
// ...
//}

// $x = [[1, 3, 5], [2, 4, 6], [3, 6, 9]];
// foreach ($x as $key => $value) {
//     echo "Key is {$key}<br>";
//     echo "var_dumping value<br>";
//     var_dump($value);
// }

// Details on values
// $x = [[1, 3, 5], [2, 4, 6], [3, 6, 9]];
// foreach ($x as $value) {
//     echo "var_dumping value:<br>";
//     var_dump($value);
//     echo "<br>";
// }

// Basically printing kvs of each arr in arr. Initial loop keys are indices, values are arrs. Then the kvs are easy.
// $x = [
//     ["hi" => "Dojo", "game" => "awesome"],
//     ["dude" => "fun", "play" => "what?"],
//     ["no" => "way", "i am" => "confused?"],
// ];
// foreach ($x as $key => $value) {
//     echo "key is {$key}<br>";
//     foreach ($value as $key2 => $value2) {
//         echo $key2 . " - " . $value2 . "<br>";
//     }
// }

// $y reps each arr. Then, those kvs are looped. Same as the last one, but diff names.
$x = [
    ["hi" => "Dojo", "game" => "awesome"],
    ["dude" => "fun", "play" => "what?"],
    ["no" => "way", "i am" => "confused?"],
];
foreach ($x as $y) {
    foreach ($y as $key => $value) {
        echo $key . " - " . $value . "<br>";
    }
}

?>
