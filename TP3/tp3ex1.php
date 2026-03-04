<?php
include "classImage.php";

$monImage = new Image(100, 100); 

for ($i = 0; $i < $monImage->getWidth(); $i++) {
    for ($j = 0; $j < $monImage->getHeight(); $j++) {
        $monImage->changeCouleurImageXY($i, $j, 255, 128, 0); 
    }
}

$monImage->afficherImage();
imagedestroy($monImage->getImage());
?>