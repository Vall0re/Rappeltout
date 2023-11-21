<?php
    $sql='SELECT * 
    FROM materiel,document
    where materiel.ref_materiel = document.ref_materiel
    order by date_exp desc
    limit 0,8;';//limite d'affichage de la liste des rappels programmés
    
    $reponse = $connexion->query($sql);
    $resultat=$reponse->fetchAll(PDO::FETCH_ASSOC);
?>