<?php
function inversionTableau(array $T): array {
    $inverse = [];

    while (count($T) > 0) {
        array_push($inverse, array_pop($T));
    }
    return $inverse;
}

/* Test */
$T = [1, 2, 3, 4, 5];
print_r(inversionTableau($T));
?>