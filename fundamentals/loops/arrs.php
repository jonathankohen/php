<?php
$arr = ["Randall", "Mike", "Charles"];

for ($i = 0; $i < count($arr); $i++) {
    echo "<pre>" . $arr[$i] . "</pre>";
}

$arr2 = [
    ["Randall", "Frisk", 27],
    ["Jim", "Halpert", 30],
    ["Spongebob", "Squarepants", 10],
];

for ($i = 0; $i < count($arr2); $i++) {
    for ($j = 0; $j < count($arr2[$i]); $j++) {
        echo $arr2[$i][$j] . " ";
    }
    echo "<br>";
}
?>
