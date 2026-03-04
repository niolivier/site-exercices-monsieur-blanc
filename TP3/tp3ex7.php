<?php
$imageSource = 'Anyme_en_2025.png';
$im = imagecreatefrompng($imageSource);

if ($im) {
    imagefilter($im, IMG_FILTER_GRAYSCALE);
    header('Content-Type: image/png');
    imagepng($im);
    imagedestroy($im);
} else {
    echo "Erreur : Impossible de charger l'image. Vérifiez le nom du fichier.";
}
?>