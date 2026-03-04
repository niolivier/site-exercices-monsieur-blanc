<?php
$tab = [2, 5, 2, 7, 2, 9];
$x = 2;
$compteur = 0;

foreach ($tab as $valeur) {
    if ($valeur == $x) {
        $compteur++;
    }
}

echo "Nombre d'occurrences de $x : $compteur <br>";
?>
