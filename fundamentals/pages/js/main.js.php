window.onload = function () {
<?php
$r2 = rand(1, 10);
$d2 = rand(1, 10);
?>
alert(<?php echo $r2 * $d2; ?>);
};