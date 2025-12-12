<?php 

class Materiel {
    protected bool $disponible;
        public function __construct(bool $disponible)
    {
        $this->disponible = $disponible;
    }

    public function isDisponible(): bool{
        return true;
    }

    public function setDisponible(bool $disponible): bool{
        return $this->disponible = $disponible;
    }



    public function __toString(): string{
        return "Info: " . "Disponible: " . $this->disponible . " | ";
    }
}


?>