<?php
function comparerOffres($minutes) {

    $prix_telecom1 = 10 + ($minutes * 0.50);
    $prix_telecom2 = 15 + ($minutes * 0.42);
    
    if ($prix_telecom1 < $prix_telecom2) {
        echo "Telecom1 est le moins cher.\n";
    } elseif ($prix_telecom2 < $prix_telecom1) {
        echo "Telecom2 est le moins cher.\n";
    } else {
        echo "Les deux offres ont le même prix.\n";
    }
}
comparerOffres(100);
?>