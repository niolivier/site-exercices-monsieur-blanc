<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Saisie des matrices</title>
</head>
<body>

<h1>Saisie des matrices</h1>

<?php
$dim = intval($_POST['dim']);
?>

<form action="calculmat.php" method="post">
    <input type="hidden" name="dim" value="<?php echo $dim; ?>">

    <h2>Matrice A</h2>
    <?php for ($i = 0; $i < $dim; $i++): ?>
        <?php for ($j = 0; $j < $dim; $j++): ?>
            <input type="number" name="A[<?php echo $i; ?>][<?php echo $j; ?>]" required>
        <?php endfor; ?>
        <br>
    <?php endfor; ?>

    <h2>Matrice B</h2>
    <?php for ($i = 0; $i < $dim; $i++): ?>
        <?php for ($j = 0; $j < $dim; $j++): ?>
            <input type="number" name="B[<?php echo $i; ?>][<?php echo $j; ?>]" required>
        <?php endfor; ?>
        <br>
    <?php endfor; ?>

    <br>
    <button type="submit">OK</button>
</form>

</body>
</html>