<?php

class Depanneuse extends Materiel implements Inventoriable
{

    private string $identifiant;

    public function __construct(string $identifiant, bool $disponible = false)
    {
        parent::__construct($disponible);
        $this->identifiant = $identifiant;
    }

    public function getIdentifiant():string
    {
        return $this->identifiant;
    }

    public function getInfosCompletes(): string
    {
        return parent::__toString() .  ' Identifiant: ' . $this->getIdentifiant();
    }
}


?>