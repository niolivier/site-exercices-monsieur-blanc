<?php
include "classImage.php";
$img = new Image(200, 200);
for($i = 0; $i < 200; $i++) {
    for($j = 0; $j < 200; $j++) {
        $img->changeCouleurImageXY($i, $j, rand(0,255), rand(0,255), rand(0,255));
    }
}
$img->afficherImage();