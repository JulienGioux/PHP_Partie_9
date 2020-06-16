<?php
    setlocale(LC_TIME, 'french.UTF-8, fr-FR.UTF-8', 'fr.UTF-8', 'fra.UTF-8', 'fr_FR.UTF-8');
    date_default_timezone_set('Europe/Paris');

    $today = new DateTime(date('Y-m-d')); 
    $pastDay = new DateTime('2016-05-16 00:00:00');
    function fraStrDate($U) {
        return strftime('%A %d %B %Y, %R', $U -> format('U'));
    }
    $interval = $today->diff($pastDay, TRUE);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 9 Exercice 5</title>
</head>
<body>
    <p>
        <?= $today -> format('U = Y-m-d H:i:s') ?>
        <br>
        <?= fraStrDate($today) ?>
    </p>
    <p>
        <?= $pastDay -> format('U = Y-m-d H:i:s') ?>
        <br>
        <?= fraStrDate($pastDay) ?>
    </p>
    <p>
        <?= $interval->format('interval : %R%a jours') ?>
    </p>
</body>
</html>