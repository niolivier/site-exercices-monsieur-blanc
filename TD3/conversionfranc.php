<?php
function convertirMonnaie($montant, $choix) {
    $taux_conversion = 6.55957;  // Taux de conversion (1 euro = 6.55957 francs)

    if ($choix == 'E') {
        $montant_converti = $montant / $taux_conversion;
        echo $montant_converti . " euros\n";
    } elseif ($choix == 'F') {
        $montant_converti = $montant * $taux_conversion;
        echo $montant_converti . " francs\n";
    } else {
        echo "Choix invalide. Utilisez 'E' pour Euro ou 'F' pour Franc.\n";
    }
}
convertirMonnaie(100, 'E');
?>
