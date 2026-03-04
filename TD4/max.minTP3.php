<?php
function minMax(array $T): void {
    $copie = $T;

    sort($copie);
    $min = $copie[0];

    rsort($copie);
    $max = $copie[0];

    echo "Min = $min , Max = $max";
}

/* Test */
$T = [3, 8, 1, 6, 9];
minMax($T);
?>