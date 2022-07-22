<?php

class Voiture
{
    public $marque;
    private $model;
    private $couleur;
    public int $nbrRoues = 4;

    // construction de la marque a la declaraton de la classes
    public function __construct(string $data)
    {
        $this->marque = $data;
    }

    // methode pour obtenir le model
    public function getModel(): string
    {
        return $this->model;
    }

    // methode pour definir le model
    public function setModel(string $data): void
    {
        $this->model = $data;
    }


    public function getCouleur(): string
    {
        return $this->couleur;
    }
    public function setCouleur(string $data): void
    {
        $this->couleur = $data;
    }

    public function demarrer()
    {
        echo "<p>La " . $this->marque . " " . $this->model . " " . $this->couleur . " demarre !</p>";
    }

    public function afficheCouleur(): string
    {
        return '<p>La ' . $this->marque . ' ' . $this->model . ' est de couleur ' . $this->couleur . ' !</p>';
    }

    public function __destruct()
    {
        echo $this->marque.' is destroyed !<br> ';
    }
}
