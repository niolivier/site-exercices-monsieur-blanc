<?php
include "classImage.php";
$g = new Image("carte_gauche.jpg");
$d = new Image("carte_droite.jpg");
$res = new Image($g->getWidth() + $d->getWidth(), $g->getHeight());
for($i = 0; $i < $g->getWidth(); $i++) {
    for($j = 0; $j < $g->getHeight(); $j++) {
        $res->changeCouleurImageXY($i, $j, $g->getRougeImageXY($i,$j), $g->getVertImageXY($i,$j), $g->getBleuImageXY($i,$j));
        $res->changeCouleurImageXY($i + $g->getWidth(), $j, $d->getRougeImageXY($i,$j), $d->getVertImageXY($i,$j), $d->getBleuImageXY($i,$j));
    }
}
$res->afficherImage();