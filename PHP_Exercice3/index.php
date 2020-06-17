<?php 
    setlocale (LC_TIME, 'french.UTF-8, fr-FR.UTF-8, fr_FR.utf8,fra'); 
    $today = strftime('%A %d %B'); 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 9 Exercice 3</title>
</head>
<body>
    <p>
        <?= $today ?>
    </p>
</body>
</html>
