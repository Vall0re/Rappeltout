<!DOCTYPE html>
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
            <a href="logout.php" onclick="return confirm('Voulez-vous vous déconnecter ?')">Deconnexion</a>
        </nav>
    </header>
    
    <h1>Modifier un document</h1>
        
        <?php

include 'Class/DocumentClass.php';
require 'connexBD.php';
            // Vérifier si le formulaire a été soumis
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Récupérer les valeurs du formulaire
                $num_doc = $_POST["num_doc"];
                $new_date_exp = $_POST["new_date_exp"];
                $new_ref_materiel = $_POST["new_ref_materiel"];
                
                // Appeler la fonction update de la classe Document
                $document->update($num_doc, $new_date_exp, $new_ref_materiel);

                echo "<p>Le document a été mis à jour avec succès.</p>";
            }
        ?>

        <form action="" method="post">
            <label for="num_doc">Numéro du document à mettre à jour:</label>
            <input type="text" name="num_doc" required>

            <label for="new_date_exp">Nouvelle date d'expiration:</label>
            <input type="date" name="new_date_exp" required>

            <label for="new_ref_materiel">Nouvelle référence du matériel:</label>
            <input type="text" name="new_ref_materiel" required>

            <button type="submit">Mettre à jour le document</button>
        </form>
    
    
    <footer class="footer">
        <a href="https://www.nouvelle-aquitaine.fr/"><img src="images/1200px-Logo_Nouvelle-Aquitaine_2019.svg.png" alt="logo"></a>
        <a href="https://www.education.gouv.fr/"><img src="images/2560px-Ministère-Éducation-Nationale-Jeunesse.svg.png" class="veste" alt="logo2"></a> 
    </footer>
</body>
</html>
