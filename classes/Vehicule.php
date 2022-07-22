<?php

 abstract class Vehicule
{
    protected int $masse;
    protected float $vitesse;
    protected string $marque;
    protected string $couleur;
    protected array $dimension;
    protected string $modePropulsion;


    public function calculerEnergieCinetique(): float
    {
        $masseVehicule = $this->masse;
        $vitesseVehicule = $this->vitesse;
        $energieCinetique = 0.5 * ($masseVehicule * ($vitesseVehicule ** 2));
        return $energieCinetique;
    }

    //Masse
    public function getMasse(): int
    {
        return $this->masse;
    }
    public function setMasse(int $data): void
    {
        $this->masse = $data;
    }

    // Vitesse
    public function getVitesse(): float
    {
        return $this->vitesse;
    }
    public function setVitesse(float $data): void
    {
        $this->vitesse = $data;
    }

    // Marque
    public function getMarque(): string
    {
        return $this->marque;
    }
    public function setMarque(string $data): void
    {
        $this->marque = $data;
    }

    // Couleur
    // public function getCouleur(): string
    // {
    //     return $this->couleur;
    // }
    // public function setCouleur(string $data): void
    // {
    //     $this->couleur = $data;
    // }

    // Dimension L-l-h 
    public function getDimensions(): array
    {
        return $this->dimension;
    }
    public function setDimensions(array $data): void
    {
        $this->dimension = $data;
    }

    // Mode de Propulsion
    public function getModePropultion(): string
    {
        return $this->modePropulsion;
    }
    public function setModePropultion(string $data): void
    {
        $this->modePropulsion = $data;
    }
}
