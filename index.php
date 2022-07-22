<?php

// Fonction permettant le chargement automatique des classes
spl_autoload_register(function ($className) {
    require_once './classes/' . $className . '.php';
});



$voiture1 = new Voiture();
$voiture1->setMarque('BMW');
$voiture1->setVitesse(50);
$voiture1->setMasse(1200);
echo $voiture1->calculerEnergieCinetique() . " Joules<br>";
$voiture1->setVitesse(80);
echo $voiture1->calculerEnergieCinetique() . " Joules<br>";

// var_dump($voiture1);









// $voiture1 = new Voiture('BMW');
// $voiture1->setCouleur('Noire');
// // echo $voiture1->getCouleur() . '<br>';
// $voiture1->setModel('X5');
// // echo $voiture1->getModel();
// $couleurVoiture1 = $voiture1->afficheCouleur();
// // echo $couleurVoiture1;

// $voiture2 = new Voiture('Audi');
// $voiture2->setCouleur('Gris Nardo');
// // echo $voiture2->getCouleur() . '<br>';
// $voiture2->setmodel('RS4');
// // echo $voiture2->getModel();
// // $voiture2->demarrer();

// var_dump($voiture2);
// var_dump($voiture1);
// echo "<br>";
// var_dump($voiture2);