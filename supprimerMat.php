<?php
require 'class/MaterielClass.php';
require 'connexBD.php';

if (isset($_GET['ref'])) {
    $refMateriel = $_GET['ref'];

    $materiel = new Materiel("", "");
    $materiel->connex($connexion);

    $materiel->deleteMateriel($refMateriel);
}


header("Location: gestionMateriel.php");
exit();
?>
