<?php

class Voiture extends Vehicule
{

    public const CLIGNOTANT = true;
    public int $nbrRoues = 4;
    private string $carrosserie;

    public function savoirSiJaiUnClignotant(): string
    {
        if (self::CLIGNOTANT === true) {
            return 'J\'ai des clignotant !';
        } else {
            return 'Je n\'ai pas de clignotant !';
        }
    }

    public function getCarrosserie(): string
    {
        return $this->carrosserie;
    }

    public function setCarrosserie(string $data): void
    {
        $this->carrosserie = $data;
    }

    // construction de la couleur a la declaraton de la classes
    // public function __construct(string $data)
    // {
    //     $this->couleur = $data;
    // }

    // methode pour obtenir le model
    // public function getModel(): string
    // {
    //     return $this->model;
    // }

    // // methode pour definir le model
    // public function setModel(string $data): void
    // {
    //     $this->model = $data;
    // }




    public function demarrer()
    {
        echo "<p>La " . $this->marque . " " . $this->model . " " . $this->couleur . " demarre !</p>";
    }

    public function afficheCouleur(): string
    {
        return '<p>La ' . $this->marque . ' ' . $this->model . ' est de couleur ' . $this->couleur . ' !</p>';
    }

    // public function __destruct()
    // {
    //     echo $this->marque.' is destroyed !<br> ';
    // }
}
