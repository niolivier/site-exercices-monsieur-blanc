<?php

function nombreDeChiffres($n)
{
    $compteur = 0;

    while ($n > 0) {
        $n = intdiv($n, 10);
        $compteur++;
    }

    return $compteur;
}

function niemeChiffre($n, $i)
{
    for ($j = 1; $j < $i; $j++) {
        $n = intdiv($n, 10);
    }

    return $n % 10;
}

function estPair($x)
{
    return $x % 2 === 0;
}

function nombreDeChiffresPairs($n)
{
    $compteur = 0;
    $nbChiffres = nombreDeChiffres($n);

    for ($i = 1; $i <= $nbChiffres; $i++) {
        $chiffre = niemeChiffre($n, $i);
        if (estPair($chiffre)) {
            $compteur++;
        }
    }

    return $compteur;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Chiffres pairs</title>
</head>
<body>

<h2>Nombre de chiffres pairs</h2>

<form method="post">
    <label>Entrer un entier :</label>
    <input type="number" name="n" required>
    <button type="submit">Calculer</button>
</form>

<?php

if (isset($_POST['n'])) {
    $n = abs(intval($_POST['n']));
    $resultat = nombreDeChiffresPairs($n);

    echo "<h3>Nombre de chiffres pairs : $resultat</h3>";
}
?>

</body>
</html>