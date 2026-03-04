<?php
function nombreOccurrences(array $T, $x): int {
    $nb = 0;

    for ($i = 0; $i < count($T); $i++) {
        if ($T[$i] == $x) {
            $nb++;
        }
    }
    return $nb;
}

/* Test */
$T = [2, 4, 2, 7, 2];
$x = 2;
echo nombreOccurrences($T, $x);
?>