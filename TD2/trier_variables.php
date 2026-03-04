<?php

$x = 5.2;
$y = 1.8;
$z = 3.4;


if ($x > $y) {
    $temp = $x;
    $x = $y;
    $y = $temp;
}

if ($x > $z) {
    $temp = $x;
    $x = $z;
    $z = $temp;
}

if ($y > $z) {
    $temp = $y;
    $y = $z;
    $z = $temp;
}


echo "x = $x, y = $y, z = $z";
?>