<?php
    date_default_timezone_set('Europe/Paris');
    setlocale(LC_TIME, 'french.UTF-8, fr-FR.UTF-8', 'fr.UTF-8', 'fra.UTF-8', 'fr_FR.UTF-8');
    $today_Obj = new DateTime(); 
    $pastDay_Obj = new DateTime('2016-08-02 15:00:00');
    function fraStrDate($U) {
        return strftime('%A %d %B %Y, %R', $U -> format('U'));
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 9 Exercice 4</title>
</head>
<body>
    <p>
        <?= $today_Obj -> format('U = Y-m-d H:i:s') ?>
        <br>
        <?= fraStrDate($today_Obj) ?>
    </p>
    <p>
        <?= $pastDay_Obj -> format('U = Y-m-d H:i:s') ?>
        <br>
        <?= fraStrDate($pastDay_Obj) ?>
    </p>
</body>
</html>