<?php
    require 'class/DocumentClass.php';
    require 'connexBD.php';

    if (isset($_GET['num_doc'])) {
        $numDoc = $_GET['num_doc'];

        $document = new Document("", "");
        $document->connex($connexion);

        $document->deleteDocument($numDoc);
    }

    header("Location: gestionDocument.php");
    exit();
?>
