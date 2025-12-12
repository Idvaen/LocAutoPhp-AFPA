<?php

class Familial extends Vehicule
{
    private int $nbr_passagers;
    public function __construct(string $marque, string $modele, string $identifiant, int $nbr_passagers)
    {
        parent::__construct($marque, $modele, $identifiant);
        $this->setNbrPassagers($nbr_passagers);
    }
    public function __tostring()
    {
        return Vehicule::__toString() . " Nobre de passagers max: " . $this->getNbrPassagers();
    }
    /**
     * Get the value of nbr_passagers
     */
    public function getNbrPassagers(): int
    {
        return $this->nbr_passagers;
    }

    /**
     * Set the value of nbr_passagers
     */
    public function setNbrPassagers(int $nbr_passagers): self
    {
        $this->nbr_passagers = $nbr_passagers;

        return $this;
    }

    public function getInfosCompletes(): string
    {
        return Vehicule::__toString() . " Nobre de passagers max: " . $this->getNbrPassagers();

    }
}