<?php
include "classImage.php";
$monImage = new Image("unnamed.png"); 

$largeur = $monImage->getWidth();
$hauteur = $monImage->getHeight();

for ($i = 0; $i < $largeur; $i++) {
    for ($j = 0; $j < $hauteur; $j++) {
    
        $r = $monImage->getRougeImageXY($i, $j);
        $v = $monImage->getVertImageXY($i, $j);
        $b = $monImage->getBleuImageXY($i, $j);
        
        $realR = 255 - $r;
        $realV = 255 - $v;
        $realB = 255 - $b;
        
        $monImage->changeCouleurImageXY($i, $j, $realR, $realV, $realB);
    }
}

$monImage->afficherImage();
imagedestroy($monImage->getImage());
?>