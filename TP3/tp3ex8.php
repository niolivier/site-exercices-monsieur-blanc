<?php
$im = imagecreatefrompng($imagePath);

if ($im) {
    imagefilter($im, IMG_FILTER_COLORIZE, 255, 0, 0);
    header('Content-Type: image/png');
    imagepng($im);
    imagedestroy($im);
} else {
    echo "Erreur : Impossible de charger l'image.";
}
?>