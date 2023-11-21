<?php
include 'Class/MaterielClass.php';
require 'connexBD.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newRefMateriel = $_POST['newRefMateriel'];
    $newNomMateriel = $_POST['newNomMateriel'];

    $materiel = new Materiel($newRefMateriel, $newNomMateriel, $connexion);

    $materiel->updateMateriel();

    header('Location: admin.php');
    exit();
}
?>