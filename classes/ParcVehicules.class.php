<?php

class ParcVehicules
{
    private static $parc;

    public static function enregistrer(Inventoriable $inventoriable)
    {
        self::$parc[] = $inventoriable;
    }

    public static function getParc()
    {
        if (!empty(self::$parc)) {
            foreach (self::$parc as $vehicule) {
                echo get_class($vehicule) . " : " . $vehicule->getInfosCompletes() . "<br>\n";
            }
        } else
            return "Le parc est vide!";
    }

    // ------------------- ALLER PLUS LOIN ---------------------
    public static function searchVehiculeByID() {
        // getIdentifiant()
    }
}



?>