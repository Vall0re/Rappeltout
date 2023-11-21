<?php
    require 'class/DocumentClass.php';
    require 'connexBD.php';

    $date_exp = $_POST["date_exp"];
    $ref_materiel = $_POST["ref_materiel"];
    
    $doc = new Document($date_exp,$ref_materiel);
    $doc->connex($connexion);
    $doc->create();

    header("location:createDocument.php");

?>