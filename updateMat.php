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
        
        <div class="Update">
        <h2>Modifier le matériel</h2><br><br>
        <form action="traitementupdate.php" method="post">
            <label for="newRefMateriel">Nouvelle référence :</label>
            <input type="text" name="newRefMateriel" required><br><br>
            <label for="newNomMateriel">Nouveau nom :</label>
            <input type="text" name="newNomMateriel" required><br><br>
            <input type="submit" value="Mettre à jour">
        </form>
    </div>
        
        <footer class="footer">
            <a href="https://www.nouvelle-aquitaine.fr/"><img src="images/1200px-Logo_Nouvelle-Aquitaine_2019.svg.png" alt="logo"></a>
            <a href="https://www.education.gouv.fr/"><img src="images/2560px-Ministère-Éducation-Nationale-Jeunesse.svg.png" class="veste" alt="logo2"></a> 
        </footer>
    </body>
</html>
