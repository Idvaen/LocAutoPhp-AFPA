<?php

abstract class Vehicule extends Inventoriable
{
    private $marque;
    private $modele;
    private $identifiant;

    public function __construct(string $marque, string $modele, string $identifiant)
    {
        $this->setMarque($marque);
        $this->setModele($modele);
        $this->setIdentifiant($identifiant);
    }

    public function __tostring()
    {
        return get_class($this) . " Marque: " . $this->getMarque() . " Modele: " . $this->getModele() . " Numero: " . $this->getIdentifiant();
    }

    /**
     * Get the value of marque
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set the value of marque
     */
    public function setMarque($marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get the value of modele
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set the value of modele
     */
    public function setModele($modele): self
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get the value of identifiant
     */
    public function getIdentifiant()
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


    public abstract function getInfosCompletes() : string;

}