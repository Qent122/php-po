<?php

require_once './classes/Voiture.php';

$voiture1 = new Voiture('BMW');
$voiture1->setCouleur('Noire');
echo $voiture1->getCouleur().'<br>';
// $voiture1->couleur = "noire";
// $voiture1->marque = "BMW";
$voiture1->setModel('X5');
echo $voiture1->getModel();
// $voiture1->model = "X5";
$couleurVoiture1 = $voiture1->afficheCouleur();
echo $couleurVoiture1;

$voiture2 = new Voiture('Audi');
$voiture2->setCouleur('Gris Nardo');
echo $voiture2->getCouleur().'<br>';
// $voiture2->couleur = "gris nardo";
$voiture2->setmodel('RS4');
echo $voiture2->getModel();
// $voiture2->model = 'RS4';
// $voiture2->marque = "Audi";
$voiture2->demarrer();

// var_dump($voiture1);
// echo "<br>";
// var_dump($voiture2);