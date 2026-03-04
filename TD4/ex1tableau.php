<?php
$tab = [4, 7, 1, 9, 3];
$x = 9;

if (in_array($x, $tab)) {
    $indice = array_search($x, $tab);
    echo "Valeur trouvée à l'indice : $indice <br>";
} else {
    echo "-1 (valeur absente) <br>";
}
?>
