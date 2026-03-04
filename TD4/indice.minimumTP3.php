<?php
function indiceMinimum(array $T): int {
    $copie = $T;
    sort($copie);
    $min = $copie[0];

    return array_search($min, $T);
}

/* Test */
$T = [5, 3, 9, 1, 6];
echo indiceMinimum($T);
?>