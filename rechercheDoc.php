<?php
    require 'class/DocumentClass.php';
    require 'connexBD.php';
    //require 'verif_session.php';

    $valeur_doc = $_POST["valeur"];

    $Document = new Document("","");
    $Document->connex($connexion);
    $resultatDoc = $Document->retrieveDocument($valeur_doc);

    if (!empty($resultatDoc)) {
        $Date_exp = $resultatDoc[0]['date_exp'];
        $ref_materiel = $resultatDoc[0]['ref_materiel'];
    } else {
        // Gérer le cas où aucun résultat n'a été trouvé
        $Date_exp = "Aucun résultat trouvé";
        $ref_materiel = "Aucun résultat trouvé";
    }
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
                    La date d'expiration : <?php echo $Date_exp;?></br>
                    Le materiel lié : <?php echo $ref_materiel;?></br>
                </p>
            </div>
        </div>

        <footer class="footer">
            <a href="https://www.nouvelle-aquitaine.fr/"><img src="images/1200px-Logo_Nouvelle-Aquitaine_2019.svg.png" alt="logo"></a>
            <a href="https://www.education.gouv.fr/"><img src="images/2560px-Ministère-Éducation-Nationale-Jeunesse.svg.png" class="veste" alt="logo2"></a> 
        </footer>
        
    </body>
</html>