<?php
    setlocale(LC_TIME, 'french.UTF-8, fr-FR.UTF-8', 'fr.UTF-8', 'fra.UTF-8', 'fr_FR.UTF-8');
    date_default_timezone_set('Europe/Paris');

    $number = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
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
    <?= 'Il y a ' . $number . ' jours en février 2016';?>
    </p>
</body>
</html>