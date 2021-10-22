<?php
header("Content-type: text/css"); ?>

table,
th,
td {border: 1px solid black;}

th {
color: <?php
$random = rand(1, 2);

if ($random == 1) {
    echo "red";
} elseif ($random == 2) {
    echo "blue";
}
?>;
}