<?php
function rechercheValeur(array $T, $x): int {
    if (in_array($x, $T)) {
        return array_search($x, $T);
    }
    return -1;
}

/* Test */
$T = [4, 7, 2, 9, 5];
$x = 9;
echo rechercheValeur($T, $x);
?>