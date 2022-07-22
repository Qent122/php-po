<?php

class Berline extends Voiture
{
    private int $nbrPortes = 5;

    public function getNbrPortes(): int
    {
        return $this->nbrPortes;
    }

    public function setNbrPortes(string $data)
    {
        $this->nbrPortes = $data;
    }
}
