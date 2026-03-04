<?php

$x = -5;
$y = 10;

if ($x == 0 || $y == 0) {
    echo "le produit est nul";
} 
elseif (($x > 0 && $y > 0) || ($x < 0 && $y < 0)) {
	echo "le produit est positif";
}
else {
	echo "le produit est négatif";
}

?>