<?php

$montant = 350;
$remise = 0;

if ($montant >= 100 && $montant <= 500){
    $remise = $montant * 0.05;
}
elseif ($montant > 500) {
	$remise = $montant * 0.08;
}

echo "la remise est de : " . $remise . "euros";

?>