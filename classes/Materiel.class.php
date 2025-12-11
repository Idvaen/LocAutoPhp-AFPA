<?php 

class Materiel {
    protected bool $disponibilite = false;
        public function __construct(bool $disponibilite)
    {
        $this->disponibilite = $disponibilite;
    }

    public function __toString(){
        return $this->disponibilite;
    }
}


?>