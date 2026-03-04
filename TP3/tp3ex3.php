<?php
include "classImage.php";
$img = new Image(200, 200);
for($i = 0; $i < 200; $i++) {
    for($j = 0; $j < 200; $j++) {
        if ($j < 40)      $img->changeCouleurImageXY($i, $j, 255, 0, 0);
        elseif ($j < 80)  $img->changeCouleurImageXY($i, $j, 255, 255, 0);
        elseif ($j < 120) $img->changeCouleurImageXY($i, $j, 0, 255, 0);
        elseif ($j < 160) $img->changeCouleurImageXY($i, $j, 0, 0, 255);
        else              $img->changeCouleurImageXY($i, $j, 255, 0, 255);
    }
}
$img->afficherImage();