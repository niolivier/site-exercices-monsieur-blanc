<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Saisie des notes</title>
</head>
<body>

<h1>Saisie des notes</h1>

<?php
$nbNotes = intval($_POST['nbNotes']);
?>

<form action="calculstat.php" method="post">
    <?php for ($i = 0; $i < $nbNotes; $i++): ?>
        <label>Note <?php echo $i + 1; ?> :</label>
        <input type="number" name="notes[]" min="0" max="20" step="0.01" required><br><br>
    <?php endfor; ?>

    <button type="submit">OK</button>
</form>

</body>
</html>