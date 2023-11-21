<?php
    require 'class/MaterielClass.php';
    require 'connexBD.php';
    //require 'verif_session.php';

    $valeur_mat = $_POST["valeur"];

    $Materiel = new Materiel("","","","");
    $Materiel->connex($connexion);
    $Materiel->RetrieveMateriel($valeur_mat);

    $ref_materiel=$Materiel->getref_materiel();
    $nom_materiel=$Materiel->getNomMat();
?>

<html>
    <head>
        <title>RappelMat | Ajouts Materiel</title>

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

        <div class="corprecherche">
            <div class="rechback">
                <p>
                    La référence : <?php echo $ref_materiel;?></br>
                    Le materiel : <?php echo $nom_materiel;?></br>
                </p>
            </div>
        </div>

        <footer class="footer">
            <a href="https://www.nouvelle-aquitaine.fr/"><img src="images/1200px-Logo_Nouvelle-Aquitaine_2019.svg.png" alt="logo"></a>
            <a href="https://www.education.gouv.fr/"><img src="images/2560px-Ministère-Éducation-Nationale-Jeunesse.svg.png" class="veste" alt="logo2"></a> 
        </footer>
        
    </body>
</html>