<?php // requête de retards de contrôle de materiels non effectués 
    $sql='SELECT DATEDIFF(now(),date_exp) date_exp, ref_materiel
    from document
    where now() >= date_exp
    order by date_exp desc;';
    
    $reponse = $connexion->query($sql);
    $retards=$reponse->fetchAll(PDO::FETCH_ASSOC);
?>