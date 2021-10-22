<?php
// $stuff = "hey";
// echo $stuff . "<br>";
// echo "hello" . "<br>";
// echo $_SERVER['DOCUMENT_ROOT'] . "<br>";

// $students = array();

// $students[] = "Jon";
// $students[] = "Mike";
// $students[] = "Alex";

// echo "$students[0]" . ", ";
// echo "$students[1]" . ", ";
// echo "$students[2]" . "<br>";

// $other = array("thing", "thingy", "stuff");

// print_r($other);
// echo "<br>" . "$other[0]" . ", ";
// echo "$other[1]" . ", ";
// echo "$other[2]" . "<br>";

// $more = array(
//     array("thing1", "hey", 2),
//     array("thing2", "sup", 4),
//     array("thing3", "hi", 5),
// );

// echo $more[0][2] . "<br>";

// HASH ROCKETS
// $thingy = array("first_name" => "Jon", "last_name" => "Kohen", "age" => 29);
// echo $thingy["first_name"] . "<br>";
// echo $thingy["last_name"] . "<br>";
// echo $thingy["age"] . "<br>";

$multi = [
    ["first_name" => "Jon", "last_name" => "Kohen", "age" => 29],
    ["first_name" => "Erika", "last_name" => "Person", "age" => 31],
    ["first_name" => "Joyce", "last_name" => "Manor", "age" => 22],
];

// echo $multi[2]["age"];

$multi[] = ["first_name" => "Person", "last_name" => "Thing", "age" => 33];

// print_r($multi) . "<br>";
// var_dump($multi) . "<br>";
// array_push($multi, "Oliver", "Wendy");
// var_dump($multi) . "\n";
// print_r($multi) . "<br>";
$multi["Melody"] = "Ping pong";
echo "<pre>";
print_r($multi);
echo "</pre>";

echo "<pre>" . $multi["Melody"] . "</pre>";
echo "<pre>" . "hi" . "</pre>";

// array_map(
//     function ($arg1, $arg2) use ($var1, $var2) {
//         return $arg1 + $arg2 / ($var + $var2);
//     },
//     [
//         "complex" => "code",
//         "with" => function () {
//             return "inconsistent";
//         },
//         "formatting" => "is",
//         "hard" => "to",
//         "maintain" => true,
//     ]
// );

?>
