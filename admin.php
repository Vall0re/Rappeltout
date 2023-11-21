<?php
    include 'IdentifiantVerif.php';
    require 'connexBD.php';
    include 'MatDoc.php';
    require 'diffdate.php';
?>

<html>
    <head>
        <title>RappelMat | Page Administrateur</title>

        <!-- meta -->
        <meta charset="utf-8"/>

        <!-- Link -->
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header class="header">
            <a href="index.php" class="logo">Rappel<span>Mat</span></a>

            <nav class="navbar">
                <a href="admin.php" class="active">Accueil</a>
                <a href="createMateriel.php">Ajouts Materiels</a>
                <a href="createDocument.php">Ajouts documents</a>
                <a href="index.html" onclick="if(!confirm('Voulez-vous vous déconnecter ?')) return false">Deconnexion</a>
            </nav>
        </header>

        <div class="parent">
            <!-- <div class="div1">
                <div class="div1back">
                    <h2>Appareils ajoutez recemment</h2><br>
                        </?php 
                            if (!empty($resultat)) :
                            foreach ($resultat as $result) : ?>
                                Nom du materiel : </?php echo $result['nom_materiel']?><br>
                                Date d'expiration : </?php echo date('d/m/Y', strtotime($result['date_exp'])); ?> <br>
                                Référence du materiel : </?php echo $result['ref_materiel'] ?><br><br>
                    </?php endforeach; ?>
                    </?php else : ?>
                        <div>Aucun rappels</div>
                    </?php endif; ?>
                </div>
            </div> -->

            <div class="div2"> 
                <div class="div2back">
                    <table  class="tablerappels" id="tablerappels" align="center" name="tableau_retards" border="1" solid="#000">
                        <th colspan="2">Retard(s) de rappels de materiels</th>
                        <tr>
                            <td>Nombre de jours de retards</td>
                            <td>Référence matériel</td>
                        </tr> 
                            <?php if (!empty($retards)) : //Affichage de la liste des rappels 
                            foreach ($retards as $retard) : ?>
                        <tr>
                            <td><?php echo $retard["date_exp"];?>j de retards</td>
                            <td><?php echo $retard["ref_materiel"];?></td>
                        </tr>
                        <?php endforeach; ?>
                        <?php else : ?>
                        <div>Aucun retards de rappels , vous êtes à jour !</div>
                        <?php endif; ?>
                    </table>
                </div>
            </div>
        </div>

        
        
        <footer class="footer">
            <a href="https://www.nouvelle-aquitaine.fr/"><img src="images/1200px-Logo_Nouvelle-Aquitaine_2019.svg.png" alt="logo"></a>
            <a href="https://www.education.gouv.fr/"><img src="images/2560px-Ministère-Éducation-Nationale-Jeunesse.svg.png" class="veste" alt="logo2"></a> 
        </footer>

    </body>
</html>