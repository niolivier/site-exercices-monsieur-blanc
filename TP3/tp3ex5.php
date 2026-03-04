<?php
$img = imagecreatefromjpeg('Vichy_Labo.jpg');
$w = imagesx($img);
$h = imagesy($img);
$out = imagecreatetruecolor($w, $h);

for ($y = 0; $y < $h; $y++) {
    for ($x = 0; $x < $w; $x++) {
        imagesetpixel($out, $w - 1 - $x, $y, imagecolorat($img, $x, $y));
    }
}

header('Content-Type: image/jpeg');
imagejpeg($out);