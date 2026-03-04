<?php
function calculerPuissance($a, $b) {
    $resultat = 1;
    
    for ($i = 1; $i <= $b; $i++) {
        $resultat *= $a;
    }

    echo "Le résultat de $a^$b est : $resultat\n";
}
calculerPuissance(2, 3);
?>
