<?php

class Citadine extends Vehicule
{
    private int $autonomie;
    public function __construct(string $marque, string $modele, string $identifiant, int $autonomie)
    {
        parent::__construct($marque, $modele, $identifiant);
        $this->setAutonomie($autonomie);
    }

    public function __tostring()
    {
        return Vehicule::__toString() . " Autinomie: " . $this->getAutonomie();
    }

    /**
     * Get the value of autonomie
     */
    public function getAutonomie()
    {
        return $this->autonomie;
    }

    /**
     * Set the value of autonomie
     */
    public function setAutonomie($autonomie): self
    {
        $this->autonomie = $autonomie;

        return $this;
    }

    public function getInfosCompletes(): string{
        return Vehicule::__toString() . " Autinomie: " . $this->getAutonomie();
    }
}