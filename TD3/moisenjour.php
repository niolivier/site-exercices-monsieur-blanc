<?php
function afficherMois($nb_jours) {
    switch ($nb_jours) {
        case 28:
            echo "Février\n";
            break;
        case 30:
            echo "Avril, Juin, Septembre, Novembre\n";
            break;
        case 31:
            echo "Janvier, Mars, Mai, Juillet, Août, Octobre, Décembre\n";
            break;
        default:
            echo "Nombre de jours invalide.\n";
            break;
    }
}
afficherMois(31);
?>