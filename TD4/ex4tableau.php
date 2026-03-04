<?php
$tab = [8, 3, 6, 1, 9];
$tabOriginal = $tab;

sort($tab);
$min = $tab[0];
$indiceMin = array_search($min, $tabOriginal);

echo "Indice du minimum : $indiceMin <br>";
?>
