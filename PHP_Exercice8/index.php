<?php
    setlocale(LC_TIME, 'french.UTF-8, fr-FR.UTF-8', 'fr.UTF-8', 'fra.UTF-8', 'fr_FR.UTF-8');
    date_default_timezone_set('Europe/Paris');

    $date = new DateTime(date('Y-m-d'));
    $interval = new DateInterval('P22D');
    $interval->invert = TRUE;
    $date->add($interval);
    
    function fraStrDate($U) {
        return strftime('%A %d %B %Y', $U -> format('U'));
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 9 Exercice 8</title>
</head>
<body>
    <p>
    <?= 'Il y a 22 jours nous étions le : ' . fraStrDate($date);?>
    </p>
</body>
</html>