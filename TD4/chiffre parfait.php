<?php

function afficherNombresParfaitsJusquA($n)
{
    for ($i = 1; $i <= $n; $i++) {
        if (estParfait($i)) {
            echo $i . "<br>";
        }
    }
}

function estParfait($x)
{
    return $x === sommeDesDiviseurs($x);
}

function sommeDesDiviseurs($x)
{
    $somme = 0;

    for ($d = 1; $d < $x; $d++) {
        if (estUnDiviseur($d, $x)) {
            $somme += $d;
        }
    }

    return $somme;
}

function estUnDiviseur($d, $x)
{
    return $x % $d === 0;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nombres parfaits</title>
</head>
<body>

<h2>Nombres parfaits</h2>

<form method="post">
    <label>Entrer un entier naturel :</label>
    <input type="number" name="n" min="1" required>
    <button type="submit">Afficher</button>
</form>

<?php
if (isset($_POST['n'])) {
    $n = intval($_POST['n']);
    echo "<h3>Nombres parfaits ≤ $n :</h3>";
    afficherNombresParfaitsJusquA($n);
}
?>

</body>

</html>
