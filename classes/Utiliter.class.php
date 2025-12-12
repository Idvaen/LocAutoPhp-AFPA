<?php

class Utiliter extends Vehicule
{
    private int $charge;
    public function __construct(string $marque, string $modele, string $identifiant, int $charge)
    {
        parent::__construct($marque, $modele, $identifiant);
        $this->setCharge($charge);
    }

    public function __tostring()
    {
        return Vehicule::__toString() . " Charge utile: " . $this->getCharge();
    }

    /**
     * Get the value of charge
     */
    public function getCharge(): int
    {
        return $this->charge;
    }

    /**
     * Set the value of charge
     */
    public function setCharge(int $charge): self
    {
        $this->charge = $charge;

        return $this;
    }

    public function getInfosCompletes(): string
    {
        return Vehicule::__toString() . " Charge utile: " . $this->getCharge();

    }
}