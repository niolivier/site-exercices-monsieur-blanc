<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calcul des matrices</title>
</head>
<body>

<h1>Résultats</h1>

<?php
$dim = $_POST['dim'];
$A = $_POST['A'];
$B = $_POST['B'];

function afficherMatrice($M, $dim) {
    echo "<table border='1' cellpadding='5'>";
    for ($i = 0; $i < $dim; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $dim; $j++) {
            echo "<td>" . $M[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table><br>";
}

function addition($A, $B, $dim) {
    $C = [];
    for ($i = 0; $i < $dim; $i++) {
        for ($j = 0; $j < $dim; $j++) {
            $C[$i][$j] = $A[$i][$j] + $B[$i][$j];
        }
    }
    return $C;
}

function multiplication($A, $B, $dim) {
    $C = [];
    for ($i = 0; $i < $dim; $i++) {
        for ($j = 0; $j < $dim; $j++) {
            $C[$i][$j] = 0;
            for ($k = 0; $k < $dim; $k++) {
                $C[$i][$j] += $A[$i][$k] * $B[$k][$j];
            }
        }
    }
    return $C;
}

echo "<h2>Matrice A</h2>";
afficherMatrice($A, $dim);

echo "<h2>Matrice B</h2>";
afficherMatrice($B, $dim);

echo "<h2>Addition A + B</h2>";
afficherMatrice(addition($A, $B, $dim), $dim);

echo "<h2>Multiplication A × B</h2>";
afficherMatrice(multiplication($A, $B, $dim), $dim);
?>

</body>
</html>