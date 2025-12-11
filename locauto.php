<?php

    spl_autoload_register(function ($class) {
        require_once "classes/$class.class.php";
    });
    const RC = "<br>\n";
    $c1 = new Citadine("BMW", "966 Dir", "VR444RE", 90);
    $f1 = new Familial("AUDI", "442 BAR", "TR6566R", 6);
    $u1 = new Utiliter("BMW", "666 Diabl", "MM787U", 800);

    $g1 = new Garage("G123", 120,5,3);

    ParcVehicules::enregistrer($c1);
    ParcVehicules::enregistrer($f1);
    ParcVehicules::enregistrer($u1);

    ParcVehicules::enregistrer($g1);

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LocAuto</title>
</head>

<body>
    <h1>LocAuto</h1>
    <?= RC . $c1 . RC . $f1 . RC . $u1 ?>

    <h1>ParcVehiecule</h1>
    <?= RC . ParcVehicules::getParc() ?>

</body>

</html>