<?php
require __DIR__ . '/vendor/autoload.php';

$paris = new DateTimeZone('Europe/Paris');

$LA = new DateTimeZone('America/Los_Angeles');

// Obtenir la date et l'heure a l'instant t
$maintenant =new DateTime(); // Ou DateTime('now')
dump($maintenant->format('D-d-m-Y H:i:s'));

$rachid =new DateTime('2000-03-24 17:00:00', $paris);
// dump($rachid);

$vendrediProchain = new DateTime('next friday');
// dump($vendrediProchain);
// public DateTime::format(string $format): string;


// echo strtotime('now');
// Instancier un objet DateTime depuis un Timestamp Unix
$timeStamp =new DateTime('@1658914936');
// dump($timeStamp);

$formatSpecifique= DateTime::createFromFormat('G/i/s:j/m/Y-u', '7/32/12:3/1/2016-5687');

$formatSpecifique->setDate(2022,2,28);
$formatSpecifique->setTime(13,48,14);
$formatSpecifique->setTimezone(new DateTimeZone('Europe/Paris'));

dump($formatSpecifique);

// Methodes add() et sub() pour ajouter ou soustraire du temps avec la classe DateInterval
$date1=new DateTime('1998-05-4');
$date1->add(new DateInterval('P1m')); // On ajoute 1 mois a une la date representée par l'objet
$date1->sub(new DateInterval('P4D')); // on soustrait 4 jours

$naissance = new DateTime('1973-02-19 14:55:00');
$now=new DateTime();
$difference=$now->diff($naissance);

echo $difference->format('%y ans, %m mois et %d jours');