<?php
$tab = [1, 2, 3, 4, 5];
$tabInverse = [];

while (count($tab) > 0) {
    array_push($tabInverse, array_pop($tab));
}

print_r($tabInverse);
?>
