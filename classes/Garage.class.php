<?php

class Garage extends Inventoriable
{
    private $identifiant;
    private float $surface;
    private int $capacite;
    private int $niveaux;

    public function __construct(string $identifiant, string $surface, int $capacite, int $niveaux)
    {
        $this->setIdentifiant($identifiant);
        $this->setSurface($surface);
        $this->setCapacite($capacite);
        $this->setNiveaux($niveaux);

    }


    public function getInfosCompletes(): string
    {
        return " Surface: " . $this->getSurface() . " Capacite: " . $this->getCapacite() . " Niveaux: " . $this->getNiveaux();
    }


    /**
     * Get the value of surface
     */
    public function getSurface(): float
    {
        return $this->surface;
    }

    /**
     * Set the value of surface
     */
    public function setSurface(float $surface): self
    {
        $this->surface = $surface;

        return $this;
    }

    /**
     * Get the value of capacite
     */
    public function getCapacite(): int
    {
        return $this->capacite;
    }

    /**
     * Set the value of capacite
     */
    public function setCapacite(int $capacite): self
    {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * Get the value of niveaux
     */
    public function getNiveaux(): int
    {
        return $this->niveaux;
    }

    /**
     * Set the value of niveaux
     */
    public function setNiveaux(int $niveaux): self
    {
        $this->niveaux = $niveaux;

        return $this;
    }



    /**
     * Get the value of identifiant
     */
    public function getIdentifiant(): string
    {
        return $this->identifiant;
    }

    /**
     * Set the value of identifiant
     */
    public function setIdentifiant($identifiant): self
    {
        $this->identifiant = $identifiant;

        return $this;
    }
}

?>