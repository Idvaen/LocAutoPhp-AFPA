<?php

class Depanneuse extends Materiel implements Inventoriable
{

    private string $identifiant;

    public function __construct(string $identifiant, bool $disponibilite)
    {
        parent::__construct($disponibilite);
    }

    public function getIdentifiant():string
    {
        return $this->identifiant;
    }

    public function getInfosCompletes(): string
    {
        return 'TEST';
    }
}


?>