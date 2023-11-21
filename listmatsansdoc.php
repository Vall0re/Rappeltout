<?php
$sql='SELECT materiel.ref_materiel, nom_materiel from materiel 
left join document 
on document.ref_materiel=materiel.ref_materiel 
where num_doc is null';
$rep = $connexion->query($sql);
$doc=$rep->fetchAll(PDO::FETCH_ASSOC);
?>