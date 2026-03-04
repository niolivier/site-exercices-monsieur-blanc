<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Statistiques</title>
</head>
<body>

<h1>Statistiques des notes</h1>

<?php
$notes = $_POST['notes'];

function moyenne($notes) {
    return array_sum($notes) / count($notes);
}

function variance($notes) {
    $moy = moyenne($notes);
    $somme = 0;
    foreach ($notes as $note) {
        $somme += pow($note - $moy, 2);
    }
    return $somme / count($notes);
}

function ecartType($notes) {
    return sqrt(variance($notes));
}

function occurrences($notes) {
    return array_count_values($notes);
}

echo "<p>Note minimale : " . min($notes) . "</p>";
echo "<p>Note maximale : " . max($notes) . "</p>";
echo "<p>Moyenne : " . round(moyenne($notes), 2) . "</p>";
echo "<p>Variance : " . round(variance($notes), 2) . "</p>";
echo "<p>Écart-type : " . round(ecartType($notes), 2) . "</p>";

echo "<h2>Occurrences</h2>";
foreach (occurrences($notes) as $note => $nb) {
    echo "Note $note : $nb fois<br>";
}
?>

</body>
</html>