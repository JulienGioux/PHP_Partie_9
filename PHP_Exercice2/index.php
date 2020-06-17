<?php 
    $today = date("m-d-yy");
    $today2 = new dateTime();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 9 Exercice 2</title>
</head>
<body>
    <p>
        <?= $today ?>
        <br>
        <?= $today2 -> format('m-d-yy'); ?>
    </p>
</body>
</html>